<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['showRegistrationForm', 'register']);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    
    public function dashboard()
    {
        $user = Auth::user();
        
        // If email is not verified, redirect to verification notice
        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice');
        }
        
        $activePlan = $user->getActivePlan();
        return view('dashboard', compact('activePlan'));
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    }
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('web')->login($user);

        // Start a new session for the user
        $request->session()->regenerate();

        return redirect()->route('verification.notice')
            ->with('success', 'Registration successful! Please verify your email address.');
    }

    // Add method to handle email verification if needed
    public function verifyEmail(Request $request)
    {
        $request->user()->markEmailAsVerified();
        return redirect()->route('dashboard')->with('success', 'Email verified successfully!');
    }

    public function profile()
    {
        return view('profile.edit', ['user' => Auth::user()]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'phone_number' => ['nullable', 'string', 'max:20'],
            'fitness_goals' => ['required', 'string'],
        ]);

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'fitness_goals' => $request->fitness_goals,
        ]);

        return back()->with('success', 'Profile updated successfully!');
    }
}
