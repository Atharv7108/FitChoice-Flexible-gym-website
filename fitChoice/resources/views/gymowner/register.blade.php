@extends('layouts.auth')

@section('title', 'Gym Owner Registration')

@section('content')
<h2 class="text-2xl font-bold text-center mb-4 text-[#1f2937] dark:text-white">Register Your Gym</h2>

@if ($errors->any())
    <div class="mb-4 p-4 rounded-lg bg-[#ef4444]/10 text-[#ef4444] text-sm">
        <ul class="list-disc pl-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('gymowner.register.submit') }}" method="POST">
    @csrf
    
    <!-- Gym Owner Name -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-user"></i>
            </div>
            <input type="text" id="name" name="name" value="{{ old('name') }}" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                {{ $errors->has('name') ? 'border-[#ef4444] focus:border-[#ef4444] focus:ring-[#ef4444]/50' : 'border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50' }}"
                placeholder=" " required autofocus>
            <label for="name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-8">
                Gym Owner Name
            </label>
        </div>
        @error('name')
            <p class="mt-1 text-sm text-[#ef4444]">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Gym Name -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-dumbbell"></i>
            </div>
            <input type="text" id="gym_name" name="gym_name" value="{{ old('gym_name') }}" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                {{ $errors->has('gym_name') ? 'border-[#ef4444] focus:border-[#ef4444] focus:ring-[#ef4444]/50' : 'border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50' }}"
                placeholder=" " required>
            <label for="gym_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-8">
                Gym Name
            </label>
        </div>
        @error('gym_name')
            <p class="mt-1 text-sm text-[#ef4444]">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Email Address -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <input type="email" id="email" name="email" value="{{ old('email') }}" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                {{ $errors->has('email') ? 'border-[#ef4444] focus:border-[#ef4444] focus:ring-[#ef4444]/50' : 'border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50' }}"
                placeholder=" " required>
            <label for="email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-8">
                Email Address
            </label>
        </div>
        @error('email')
            <p class="mt-1 text-sm text-[#ef4444]">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Phone Number -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-phone"></i>
            </div>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                {{ $errors->has('phone') ? 'border-[#ef4444] focus:border-[#ef4444] focus:ring-[#ef4444]/50' : 'border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50' }}"
                placeholder=" " required>
            <label for="phone" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-8">
                Phone Number
            </label>
        </div>
        @error('phone')
            <p class="mt-1 text-sm text-[#ef4444]">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Gym Address -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <input type="text" id="address" name="address" value="{{ old('address') }}" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                {{ $errors->has('address') ? 'border-[#ef4444] focus:border-[#ef4444] focus:ring-[#ef4444]/50' : 'border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50' }}"
                placeholder=" " required>
            <label for="address" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-8">
                Gym Address
            </label>
        </div>
        @error('address')
            <p class="mt-1 text-sm text-[#ef4444]">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Password -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-lock"></i>
            </div>
            <input type="password" id="password" name="password" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                {{ $errors->has('password') ? 'border-[#ef4444] focus:border-[#ef4444] focus:ring-[#ef4444]/50' : 'border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50' }}"
                placeholder=" " required>
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
    
    <!-- Confirm Password -->
    <div class="mb-5 relative">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-lock"></i>
            </div>
            <input type="password" id="password_confirmation" name="password_confirmation" 
                class="w-full px-10 py-3 rounded-lg border-2 focus:outline-none focus:ring-2 bg-white dark:bg-gray-700 text-[#1f2937] dark:text-white 
                border-gray-300 dark:border-gray-600 focus:border-[#6366f1] focus:ring-[#6366f1]/50"
                placeholder=" " required>
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
        Register
    </button>
</form>
@endsection

@section('auth_links')
<div class="mt-4">
    <span>Already have an account?</span>
    <a href="{{ route('gymowner.login') }}" class="text-[#6366f1] hover:underline ml-1">Login here</a>
</div>
@endsection 