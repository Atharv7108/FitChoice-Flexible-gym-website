@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<h2 class="text-2xl font-bold text-center mb-4 text-[#1f2937] dark:text-white">Create Account</h2>

<p class="text-center mb-6 text-gray-600 dark:text-gray-400 text-sm">Create your account. It's free and only takes a minute</p>

<form method="POST" action="{{ route('register') }}">
    @csrf
    
    <!-- First Name Field -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-user"></i>
            </div>
            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                {{ $errors->has('first_name') ? 'border-[#ef4444] focus:border-[#ef4444] focus:ring-[#ef4444]/50' : 'border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50' }}"
                placeholder=" " required autocomplete="given-name" autofocus>
            <label for="first_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-8">
                First Name
            </label>
        </div>
        @error('first_name')
            <p class="mt-1 text-sm text-[#ef4444]">{{ $message }}</p>
        @enderror
    </div>

    <!-- Last Name Field -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-user"></i>
            </div>
            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                {{ $errors->has('last_name') ? 'border-[#ef4444] focus:border-[#ef4444] focus:ring-[#ef4444]/50' : 'border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50' }}"
                placeholder=" " required autocomplete="family-name">
            <label for="last_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-8">
                Last Name
            </label>
        </div>
        @error('last_name')
            <p class="mt-1 text-sm text-[#ef4444]">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Email Field -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <input type="email" id="email" name="email" value="{{ old('email') }}" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                {{ $errors->has('email') ? 'border-[#ef4444] focus:border-[#ef4444] focus:ring-[#ef4444]/50' : 'border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50' }}"
                placeholder=" " required autocomplete="email">
            <label for="email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-8">
                Email Address
            </label>
        </div>
        @error('email')
            <p class="mt-1 text-sm text-[#ef4444]">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Password Field -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-lock"></i>
            </div>
            <input type="password" id="password" name="password" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                {{ $errors->has('password') ? 'border-[#ef4444] focus:border-[#ef4444] focus:ring-[#ef4444]/50' : 'border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50' }}"
                placeholder=" " required autocomplete="new-password">
            <label for="password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-8">
                Password
            </label>
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                <i class="fa-solid fa-eye text-gray-500 cursor-pointer hover:text-[#6366f1]" data-for="password" onclick="togglePassword('password')"></i>
            </div>
        </div>
        @error('password')
            <p class="mt-1 text-sm text-[#ef4444]">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Confirm Password Field -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-lock"></i>
            </div>
            <input type="password" id="password_confirmation" name="password_confirmation" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50"
                placeholder=" " required autocomplete="new-password">
            <label for="password_confirmation" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-8">
                Confirm Password
            </label>
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                <i class="fa-solid fa-eye text-gray-500 cursor-pointer hover:text-[#6366f1]" data-for="password_confirmation" onclick="togglePassword('password_confirmation')"></i>
            </div>
        </div>
    </div>
    
    <!-- Terms Checkbox -->
    <div class="mb-5 flex items-start">
        <div class="flex items-center h-5">
            <input type="checkbox" id="terms" name="terms" required
                class="w-4 h-4 text-[#6366f1] rounded border-gray-300 focus:ring-[#6366f1] dark:focus:ring-[#6366f1] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600
                {{ $errors->has('terms') ? 'border-[#ef4444]' : '' }}">
        </div>
        <label class="ml-2 text-sm text-gray-600 dark:text-gray-400" for="terms">
            I accept the <a href="#" class="text-[#6366f1] hover:underline">Terms of Use</a> & <a href="#" class="text-[#6366f1] hover:underline">Privacy Policy</a>
        </label>
        @error('terms')
            <p class="mt-1 text-sm text-[#ef4444]">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Register Button -->
    <button type="submit" class="w-full bg-[#6366f1] hover:bg-[#4f46e5] text-white font-semibold py-3 px-4 rounded-lg transition duration-200 ease-in-out transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-[#6366f1] focus:ring-opacity-50 shadow-md">
        Register Now
    </button>
</form>
@endsection

@section('auth_links')
<div class="mt-4">
    <span>Already have an account?</span>
    <a href="{{ route('login') }}" class="text-[#6366f1] hover:underline ml-1">Login here</a>
</div>
@endsection
