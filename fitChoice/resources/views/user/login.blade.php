@extends('layouts.auth')

@section('title', 'User Login')

@section('content')
<div class="flex flex-col items-center">
    <img src="{{ asset('images/logo.png') }}" alt="FitChoice Logo" class="h-16 mb-6" onerror="this.src='https://via.placeholder.com/150x50?text=FitChoice'; this.onerror=null;">
    <div class="inline-flex items-center justify-center px-4 py-1 mb-6 rounded-full bg-green-100">
        <svg class="w-5 h-5 mr-2 text-green-700" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
        <span class="text-sm font-medium text-green-700">User Portal</span>
    </div>
    <h2 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back</h2>
    <p class="text-gray-600 mb-8">Login to your fitness journey</p>

    @if (session('error'))
    <div class="w-full max-w-md bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        {{ session('error') }}
    </div>
    @endif

    <form action="{{ route('user.login.submit') }}" method="POST" class="w-full max-w-md">
        @csrf
        
        <div class="mb-6">
            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                </div>
                <input type="email" class="pl-10 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm @error('email') border-red-500 @enderror" 
                    id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="password" class="pl-10 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm @error('password') border-red-500 @enderror" 
                    id="password" name="password" required autocomplete="current-password">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                    <button type="button" id="togglePassword" class="text-gray-400 hover:text-gray-600 focus:outline-none">
                        <svg class="h-5 w-5" id="eyeIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded" 
                    id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="ml-2 block text-sm text-gray-700" for="remember">Remember Me</label>
            </div>
            
            <a href="{{ route('password.request') }}" class="text-sm text-green-600 hover:text-green-500">
                Forgot your password?
            </a>
        </div>
        
        <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-md transition duration-200 ease-in-out transform hover:-translate-y-1 hover:shadow-lg flex justify-center items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
            </svg>
            Sign In
        </button>
        
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">Don't have an account?
                <a href="{{ route('user.register') }}" class="text-green-600 hover:text-green-500 font-medium">
                    Register now
                </a>
            </p>
            
            <div class="flex items-center justify-center mt-4">
                <svg class="h-5 w-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-sm text-gray-600">Need help? <a href="#" class="text-green-600 hover:underline">Contact support</a></span>
            </div>
        </div>
    </form>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = '<path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" /><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />';
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = '<path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />';
        }
    });
</script>
@endsection 