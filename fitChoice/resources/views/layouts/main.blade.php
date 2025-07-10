<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FitChoice') }} - @yield('title', 'Dashboard')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background-color: #222;
            color: #fff;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 100;
            transition: all 0.3s;
        }
        
        .sidebar-brand {
            padding: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-nav {
            padding: 0;
            list-style: none;
        }
        
        .sidebar-nav li a {
            padding: 0.8rem 1rem;
            display: block;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: 0.3s;
        }
        
        .sidebar-nav li a:hover, .sidebar-nav li a.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }
        
        .sidebar-nav li a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .main-content {
            margin-left: 250px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        
        .dashboard-header {
            padding: 1rem;
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }
        
        .content-wrapper {
            padding: 2rem;
            flex-grow: 1;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 0;
                transform: translateX(-250px);
            }
            
            .sidebar.active {
                width: 250px;
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .main-content.sidebar-active {
                margin-left: 250px;
            }
            
            .toggle-sidebar {
                display: block !important;
            }
        }
        
        .toggle-sidebar {
            display: none;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Additional Styles -->
    @stack('styles')
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand d-flex align-items-center">
            <div class="brand-icon me-2">
            <img class="h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="FIT CHOICE">
            </div>
            <div class="brand-text">
                <h5 class="mb-0">FitChoice</h5>
            </div>
        </div>
        
        <ul class="sidebar-nav">
            @auth('web')
                <!-- Regular User Navigation -->
                <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home"></i> Dashboard
                </a></li>
                <li><a href="#explore-gyms">
                    <i class="fas fa-search"></i> Explore Gyms
                </a></li>
                <li><a href="#my-membership">
                    <i class="fas fa-id-card"></i> My Membership
                </a></li>
                <li><a href="#profile">
                    <i class="fas fa-user"></i> Profile
                </a></li>
            @endauth
            
            @auth('admin')
                <!-- Admin Navigation -->
                <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a></li>
                <li><a href="#manage-users">
                    <i class="fas fa-users"></i> Users
                </a></li>
                <li><a href="#manage-gyms">
                    <i class="fas fa-dumbbell"></i> Gyms
                </a></li>
                <li><a href="#reports">
                    <i class="fas fa-chart-bar"></i> Reports
                </a></li>
            @endauth
            
            @auth('gymowner')
                <!-- Gym Owner Navigation -->
                <li><a href="{{ route('gymowner.dashboard') }}" class="{{ request()->routeIs('gymowner.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a></li>
                <li><a href="#my-gym">
                    <i class="fas fa-dumbbell"></i> My Gym
                </a></li>
                <li><a href="#members">
                    <i class="fas fa-users"></i> Members
                </a></li>
                <li><a href="#settings">
                    <i class="fas fa-cog"></i> Settings
                </a></li>
            @endauth
            
            <!-- Logout button for all users -->
            <li class="mt-auto">
                @auth('web')
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link text-white text-decoration-none ps-3">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                @endauth
                
                @auth('admin')
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link text-white text-decoration-none ps-3">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                @endauth
                
                @auth('gymowner')
                    <form method="POST" action="{{ route('gymowner.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link text-white text-decoration-none ps-3">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                @endauth
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Toggle Sidebar Button (Mobile) -->
        <button class="toggle-sidebar btn btn-sm btn-dark position-fixed m-2" style="z-index: 1000; top: 0; left: 0;">
            <i class="fas fa-bars"></i>
        </button>
        
        <!-- Dashboard Header -->
        <div class="dashboard-header">
            <div class="container-fluid">
                <h1 class="h3">
                    @auth('web')
                        User Dashboard
                    @endauth
                    
                    @auth('admin')
                        Admin Dashboard
                    @endauth
                    
                    @auth('gymowner')
                        Gym Owner Dashboard
                    @endauth
                    
                    @yield('header', '')
                </h1>
            </div>
        </div>
        
        <!-- Main Content Area -->
        <div class="content-wrapper container-fluid">
            @yield('content')
        </div>
        
        <!-- Footer -->
        <footer class="bg-light py-3 border-top">
            <div class="container-fluid">
                <p class="text-center mb-0">&copy; {{ date('Y') }} FitChoice. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Sidebar Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.querySelector('.toggle-sidebar');
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            
            toggleBtn.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                mainContent.classList.toggle('sidebar-active');
            });
        });
    </script>
    
    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html> 