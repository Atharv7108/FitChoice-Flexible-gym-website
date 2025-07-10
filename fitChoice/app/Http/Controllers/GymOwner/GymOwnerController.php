<?php

namespace App\Http\Controllers\GymOwner;

use App\Http\Controllers\Controller;
use App\Models\GymOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class GymOwnerController extends Controller
{
    public function login()
    {
        return view('gymowner.login');    
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('gymowner')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('gymowner.dashboard');
        } else {
            return redirect()->back()->withErrors(['Invalid email or password.']);
        }
    }

    public function dashboard()
    {
        return view('gymowner.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('gymowner')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('gymowner.login');
    }

    public function showRegistrationForm()
    {
        return view('gymowner.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:gym_owners'],
            'phone' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $gymOwner = GymOwner::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('gymowner')->login($gymOwner);

        return redirect()->route('gymowner.dashboard');
    }
} 