@extends('layouts.main')

@section('title', 'User Dashboard')

@section('content')
<div class="py-6">
    @if(session('success'))
    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    <!-- Welcome Section -->
    <!-- <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Welcome, John!</h1>
        <p class="text-gray-600">Here's an overview of your fitness journey</p>
    </div> -->

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <x-card title="Active Membership" icon="fas fa-id-card">
            <div class="flex justify-between items-center">
                @if($activePlan)
                    <span class="text-lg font-semibold text-green-600">{{ $activePlan->membership_type }}</span>
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Active</span>
                @else
                    <span class="text-lg font-semibold text-gray-600">No Active Plan</span>
                    <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Inactive</span>
                @endif
            </div>
        </x-card>
        
        <x-card title="Gym Visits" icon="fas fa-walking">
            <div class="text-center">
                <span class="text-3xl font-bold">12</span>
                <p class="text-gray-500 text-sm">This month</p>
            </div>
        </x-card>
        
        <x-card title="Upcoming Classes" icon="fas fa-calendar-alt">
            <div class="text-center">
                <span class="text-3xl font-bold">3</span>
                <p class="text-gray-500 text-sm">Registered</p>
            </div>
        </x-card>
    </div>

    <!-- Explore Gyms Section -->
    <section class="mb-12">
        <x-section-title title="Explore Gyms">
            Discover gyms in your area that match your fitness goals
        </x-section-title>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-card class="hover:shadow-lg transition-shadow duration-300">
                <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-full h-48 object-cover rounded -mt-5 -mx-5 mb-4" alt="Fitness Plus">
                <h3 class="font-bold text-xl mb-2">Fitness Plus</h3>
                <div class="flex items-center mb-2">
                    <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                    <span class="text-gray-600 text-sm">123 Main St, City Center</span>
                </div>
                <p class="text-gray-700 mb-4">A premium gym with state-of-the-art equipment and experienced trainers.</p>
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">View Details</button>
            </x-card>
            
            <x-card class="hover:shadow-lg transition-shadow duration-300">
                <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-full h-48 object-cover rounded -mt-5 -mx-5 mb-4" alt="PowerLift Gym">
                <h3 class="font-bold text-xl mb-2">PowerLift Gym</h3>
                <div class="flex items-center mb-2">
                    <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                    <span class="text-gray-600 text-sm">456 Elm St, West District</span>
                </div>
                <p class="text-gray-700 mb-4">Specialized in strength training with dedicated lifting zones.</p>
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">View Details</button>
            </x-card>
            
            <x-card class="hover:shadow-lg transition-shadow duration-300">
                <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-full h-48 object-cover rounded -mt-5 -mx-5 mb-4" alt="CardioFit Studio">
                <h3 class="font-bold text-xl mb-2">CardioFit Studio</h3>
                <div class="flex items-center mb-2">
                    <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                    <span class="text-gray-600 text-sm">789 Oak Dr, East Side</span>
                </div>
                <p class="text-gray-700 mb-4">Focused on cardio fitness with group classes and personalized training.</p>
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">View Details</button>
            </x-card>
        </div>
    </section>

    <!-- My Membership Section -->
    <section class="mb-12">
        <x-section-title title="My Membership">
            View your current membership details and benefits
        </x-section-title>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                @if($activePlan)
                    <x-card title="{{ $activePlan->membership_type }} Membership" icon="fas fa-star">
                        <div class="space-y-4">
                            <div class="flex justify-between border-b pb-2">
                                <span class="text-gray-600">Status</span>
                                <span class="font-medium text-green-600">Active</span>
                            </div>
                            <div class="flex justify-between border-b pb-2">
                                <span class="text-gray-600">Start Date</span>
                                <span class="font-medium">{{ $activePlan->payment_date->format('F d, Y') }}</span>
                            </div>
                            <div class="flex justify-between border-b pb-2">
                                <span class="text-gray-600">Next Payment</span>
                                <span class="font-medium">{{ $activePlan->payment_date->addMonth()->format('F d, Y') }}</span>
                            </div>
                            <div class="flex justify-between border-b pb-2">
                                <span class="text-gray-600">Billing</span>
                                <span class="font-medium">Monthly - ${{ number_format($activePlan->amount, 2) }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Transaction ID</span>
                                <span class="font-medium text-sm">{{ $activePlan->transaction_id }}</span>
                            </div>
                        </div>
                    </x-card>
                @else
                    <x-card title="No Active Membership" icon="fas fa-info-circle">
                        <div class="text-center py-6">
                            <p class="text-gray-600 mb-4">You don't have an active membership plan.</p>
                            <a href="{{ route('welcome') }}" 
                               class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-md transition duration-300">
                                View Membership Plans
                            </a>
                        </div>
                    </x-card>
                @endif
            </div>
            
            <div>
                <x-card title="Membership QR Code" icon="fas fa-qrcode">
                    <div class="flex flex-col items-center">
                        <div class="bg-gray-100 p-3 rounded-lg mb-3">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=FITCHOICE-USER-12345" class="w-36 h-36" alt="Membership QR">
                        </div>
                        <div class="text-center">
                            <p class="text-gray-600 mb-1">Your unique access code</p>
                            <div class="bg-gray-100 py-2 px-4 rounded-lg font-mono font-bold text-center tracking-wider">
                                FC-12345-XYZ
                            </div>
                        </div>
                    </div>
                </x-card>
            </div>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="mb-12">
        <x-section-title title="Profile">
            Manage your personal information and preferences
        </x-section-title>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div>
                <x-card class="text-center">
                    <div class="flex flex-col items-center">
                        <div class="w-32 h-32 mb-4 overflow-hidden rounded-full border-4 border-blue-100">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile Photo" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold mb-1">Athar Gole</h3>
                        <p class="text-gray-600 mb-3">Member since 2023</p>
                        <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-md transition duration-300 w-full">
                            Change Photo
                        </button>
                    </div>
                </x-card>
            </div>
            
            <div class="lg:col-span-2">
                <x-card title="Personal Information" icon="fas fa-user-edit">
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-1">First Name</label>
                                <input type="text" value="John" class="w-full p-2 border border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-1">Last Name</label>
                                <input type="text" value="Doe" class="w-full p-2 border border-gray-300 rounded-md">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Email Address</label>
                            <input type="email" value="john.doe@example.com" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Phone Number</label>
                            <input type="tel" value="(555) 123-4567" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Fitness Goals</label>
                            <select class="w-full p-2 border border-gray-300 rounded-md">
                                <option selected>Weight Loss</option>
                                <option>Muscle Gain</option>
                                <option>General Fitness</option>
                                <option>Athletic Performance</option>
                            </select>
                        </div>
                        
                        <div class="flex justify-end">
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md transition duration-300">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </x-card>
            </div>
        </div>
    </section>
</div>

@push('scripts')
<script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
@endpush
@endsection
