<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FIT CHOICE') }} - @yield('title', 'Welcome')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @stack('styles')
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-900">
        <!-- Custom Header Component -->
        @include('components.header')

        <!-- Original Navigation (keep if needed for admin/dashboard pages) -->
        @if(request()->is('dashboard*'))
        @include('layouts.navigation')
        @endif

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content - Support both component style and yield style -->
        <main class="text-gray-200">
            @hasSection('content')
            @yield('content')
            @else
            {{ $slot ?? '' }}
            @endif
        </main>

        <!-- Footer -->
        <footer class="mt-12 py-6 bg-gray-900 text-white">
            <div class="container mx-auto px-4">
                <p class="text-center">&copy; {{ date('Y') }} FIT CHOICE. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>

</html>