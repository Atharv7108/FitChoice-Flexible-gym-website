@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<h2 class="text-2xl font-bold text-center mb-6 text-[#1f2937] dark:text-white">User Login</h2>

@if (session('status'))
    <div class="mb-4 p-4 rounded-lg bg-[#22c55e]/10 text-[#22c55e] text-sm">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf
    
    <!-- Email Field -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <input type="email" id="email" name="email" value="{{ old('email') }}" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                {{ $errors->has('email') ? 'border-[#ef4444] focus:border-[#ef4444] focus:ring-[#ef4444]/50' : 'border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50' }}"
                placeholder=" " required autocomplete="email" autofocus>
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
                placeholder=" " required autocomplete="current-password">
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
    
    <!-- Remember Me Checkbox -->
    <div class="mb-5 flex items-center">
        <input type="checkbox" class="w-4 h-4 text-[#6366f1] rounded border-gray-300 focus:ring-[#6366f1] dark:focus:ring-[#6366f1] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" id="remember" name="remember">
        <label class="ml-2 text-sm text-gray-600 dark:text-gray-400" for="remember">Remember Me</label>
    </div>
    
    <!-- Login Button -->
    <button type="submit" class="w-full bg-[#6366f1] hover:bg-[#4f46e5] text-white font-semibold py-3 px-4 rounded-lg transition duration-200 ease-in-out transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-[#6366f1] focus:ring-opacity-50 shadow-md">
        Login
    </button>
</form>
@endsection

@section('auth_links')
<div class="mt-4">
    @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="text-[#6366f1] hover:underline">Forgot your password?</a>
    @endif
</div>
<div class="mt-4">
    <span>Don't have an account?</span>
    <a href="{{ route('register') }}" class="text-[#6366f1] hover:underline ml-1">Register here</a>
</div>
@endsection
