<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FitChoice') }} - @yield('title', 'Authentication')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Additional Styles -->
    @stack('styles')

    <script>
        // Password toggle function
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            
            const icon = document.querySelector(`[data-for="${inputId}"]`);
            if (type === 'text') {
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</head>
<body class="h-full bg-gray-900 text-gray-200 font-figtree">
    <div class="flex min-h-screen flex-col md:flex-row">

        <!-- Left Section with Image and Welcome Text -->
        <div class="relative hidden md:flex flex-1 items-center justify-center bg-cover bg-center text-white" 
             style="background-image: url('{{ asset('images/gym4.jpeg') }}')">
            
            <!-- Dark overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            
            <!-- Content -->
            <div class="relative z-10 max-w-md p-8 text-center">
                <!-- Logo and Company Name -->
                <div class="flex items-center justify-center mb-8">
                    <a href="{{ url('/') }}" class="flex items-center hover:opacity-90 transition-opacity">
                        <img class="h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="FIT CHOICE">
                        <span class="text-xl font-bold ml-3 text-white">FIT CHOICE</span>
                    </a>
                </div>

                <h1 class="text-4xl font-bold mb-6">Welcome</h1>
                <p class="text-lg mb-6">
                    FitChoice is where fitness meets flexibility! Users can find and join the best gyms with a single, flexible membership — anytime, anywhere. Gym owners can showcase their gyms, connect with fitness enthusiasts, and manage everything in one place.
                </p>
            </div>
        </div>

        <!-- Right Section with Login/Register Form -->
        <div class="flex-1 flex items-center justify-center p-4 md:p-8">
            <div class="w-full max-w-md">
                <!-- Logo for Mobile -->
                <div class="md:hidden text-center mb-6">
                    <a href="{{ url('/') }}" class="inline-flex items-center hover:opacity-90 transition-opacity">
                        <img class="h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="FIT CHOICE">
                        <span class="text-xl font-bold ml-3 text-white">FIT CHOICE</span>
                    </a>
                </div>

                <!-- Auth Card -->
                <div class="bg-gray-800 rounded-xl shadow-lg p-8">
                    <!-- Blade Section for Form Content -->
                    @yield('content')

                    <!-- Blade Section for Auth Links -->
                    <div class="mt-6 text-center text-sm text-gray-400">
                        @yield('auth_links')
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>
