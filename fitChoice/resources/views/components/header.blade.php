<header class="w-full text-sm mb-6 bg-gray-900 shadow-md">
    <!-- Row 1: Logo + Search + Auth -->
    <div class="flex flex-col md:flex-row md:items-center justify-between w-full px-4 lg:px-8 py-4 gap-4">
        <!-- Left: Logo -->
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="flex items-center hover:opacity-90 transition-opacity">
                <img class="h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="FIT CHOICE">
                <span class="text-xl font-bold ml-3 text-white">FIT CHOICE</span>
            </a>
        </div>

        <!-- Right: Search and Auth Buttons -->
        <div class="flex flex-col sm:flex-row items-center gap-4 mt-3 md:mt-0">
            <!-- Search Form -->
            <form action="{{ route('findgym') }}" method="GET" class="w-full sm:w-auto relative">
                <div class="flex">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Search gyms..." 
                        class="w-full sm:w-64 px-4 py-2 border border-gray-700 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-[#E63946] bg-gray-800 text-white" 
                        value="{{ request('search') }}"
                    />
                    <button 
                        type="submit" 
                        class="bg-[#E63946] hover:bg-[#d32836] text-white px-4 rounded-r-lg transition-colors"
                        aria-label="Search"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </form>

            <!-- Auth Links -->
            @if (Route::has('login'))
            <nav class="flex flex-wrap items-center justify-center gap-3 mt-2 sm:mt-0">
                @auth
                <a href="{{ url('/dashboard') }}" class="px-4 py-2 text-sm font-medium rounded-lg bg-gray-800 hover:bg-gray-700 text-white transition-colors">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium rounded-lg hover:bg-gray-800 text-white transition-colors">
                    Log in
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium rounded-lg bg-gray-800 hover:bg-gray-700 text-white transition-colors">
                    Register
                </a>
                @endif

                <!-- Divider -->
                <div class="hidden sm:block border-l h-6 border-gray-700 mx-1"></div>

                <!-- Gym Owner -->
                <a href="{{ route('gymowner.login') }}" class="px-4 py-2 text-sm font-medium rounded-lg hover:bg-gray-800 text-white transition-colors">
                    Gym Owner Login
                </a>
                <a href="{{ route('gymowner.register') }}" class="px-4 py-2 text-sm font-medium rounded-lg bg-gray-800 hover:bg-gray-700 text-white transition-colors">
                    Gym Owner Register
                </a>
                @endauth
            </nav>
            @endif
        </div>
    </div>

    <!-- Row 2: Navigation Menu -->
    <div class="border-t border-gray-700">
        <nav class="flex justify-center flex-wrap gap-6 px-4 lg:px-8 py-3">
            <a href="{{ url('/') }}" class="rounded-lg {{ request()->is('/') ? 'bg-white text-gray-900' : 'text-gray-200 hover:bg-gray-800 hover:text-white' }} px-5 py-2 font-medium transition-colors">Home</a>
            <a href="{{ route('findgym') }}" class="rounded-lg {{ request()->routeIs('findgym') ? 'bg-white text-gray-900' : 'text-gray-200 hover:bg-gray-800 hover:text-white' }} px-5 py-2 font-medium transition-colors">Find Gym</a>
            <a href="{{ route('about') }}" class="rounded-lg {{ request()->routeIs('about') ? 'bg-white text-gray-900' : 'text-gray-200 hover:bg-gray-800 hover:text-white' }} px-5 py-2 font-medium transition-colors">About Us</a>
        </nav>
    </div>
</header>
