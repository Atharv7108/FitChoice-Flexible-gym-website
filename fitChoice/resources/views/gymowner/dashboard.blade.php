@extends('layouts.main')

@section('title', 'Gym Owner Dashboard')

@section('content')
<div class="py-6">
    <!-- Welcome Section -->
    <!-- <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Gym Owner Dashboard</h1>
        <p class="text-gray-600">Manage your gym and membership details from one central location</p>
    </div> -->

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <x-card>
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 mr-4">
                    <i class="fas fa-users text-blue-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-gray-500 text-sm font-medium">Total Members</h3>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-gray-800">187</span>
                        <span class="text-sm font-medium text-green-600 ml-2">+12%</span>
                    </div>
                </div>
            </div>
        </x-card>
        
        <x-card>
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 mr-4">
                    <i class="fas fa-money-bill-wave text-green-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-gray-500 text-sm font-medium">Monthly Revenue</h3>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-gray-800">$9,345</span>
                        <span class="text-sm font-medium text-green-600 ml-2">+8.3%</span>
                    </div>
                </div>
            </div>
        </x-card>
        
        <x-card>
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 mr-4">
                    <i class="fas fa-clipboard-list text-purple-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-gray-500 text-sm font-medium">Active Plans</h3>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-gray-800">4</span>
                    </div>
                </div>
            </div>
        </x-card>
        
        <x-card>
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-red-100 mr-4">
                    <i class="fas fa-chart-line text-red-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-gray-500 text-sm font-medium">Avg. Daily Visits</h3>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-gray-800">45</span>
                        <span class="text-sm font-medium text-green-600 ml-2">+5%</span>
                    </div>
                </div>
            </div>
        </x-card>
    </div>

    <!-- My Gym Section -->
    <section class="mb-12">
        <x-section-title title="My Gym">
            Information and details about your gym
        </x-section-title>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <x-card>
                    <div class="flex flex-col sm:flex-row gap-6">
                        <div class="sm:w-1/3">
                            <img src="https://images.unsplash.com/photo-1558611848-73f7eb4001a1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
                                alt="Fitness Plus Gym" 
                                class="w-full h-56 object-cover rounded-lg">
                        </div>
                        <div class="sm:w-2/3">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Fitness Plus</h3>
                            <div class="flex items-center mb-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 mr-2">Open Now</span>
                                <span class="text-sm text-gray-600">Until 10:00 PM</span>
                            </div>
                            
                            <div class="space-y-2 mb-4">
                                <div class="flex">
                                    <i class="fas fa-map-marker-alt text-gray-500 w-5"></i>
                                    <span class="text-gray-700">123 Main Street, City Center, ST 12345</span>
                                </div>
                                <div class="flex">
                                    <i class="fas fa-phone text-gray-500 w-5"></i>
                                    <span class="text-gray-700">(555) 123-4567</span>
                                </div>
                                <div class="flex">
                                    <i class="fas fa-envelope text-gray-500 w-5"></i>
                                    <span class="text-gray-700">info@fitnessplus.example.com</span>
                                </div>
                            </div>
                            
                            <div class="flex space-x-2">
                                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                                    <i class="fas fa-edit mr-1"></i> Edit Details
                                </button>
                                <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                                    <i class="fas fa-image mr-1"></i> Update Photos
                                </button>
                            </div>
                        </div>
                    </div>
                </x-card>
            </div>
            
            <div>
                <x-card title="Gym Status" icon="fas fa-check-circle">
                    <div class="space-y-4">
                        <div class="flex justify-between border-b pb-2">
                            <span class="text-gray-600">Verification</span>
                            <span class="font-medium text-green-600">Verified</span>
                        </div>
                        <div class="flex justify-between border-b pb-2">
                            <span class="text-gray-600">Listed Status</span>
                            <span class="font-medium">Active</span>
                        </div>
                        <div class="flex justify-between border-b pb-2">
                            <span class="text-gray-600">Rating</span>
                            <div class="flex items-center">
                                <span class="font-medium mr-1">4.8</span>
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Reviews</span>
                            <span class="font-medium">32</span>
                        </div>
                    </div>
                </x-card>
            </div>
        </div>
    </section>

    <!-- Members Section -->
    <section class="mb-12">
        <x-section-title title="Members">
            Manage your gym members and their memberships
        </x-section-title>
        
        <x-card>
            <div class="flex justify-between items-center mb-6">
                <div class="relative">
                    <input type="text" placeholder="Search members..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-md w-64">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                
                <div class="flex space-x-2">
                    <button class="bg-white border border-gray-300 text-gray-700 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-50">
                        <i class="fas fa-filter mr-1"></i> Filter
                    </button>
                    <button class="bg-blue-600 text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                        <i class="fas fa-plus mr-1"></i> Add Member
                    </button>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Member</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Membership</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">End Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full overflow-hidden bg-gray-100">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Member">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">John Doe</div>
                                        <div class="text-sm text-gray-500">johndoe@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Premium Plan</div>
                                <div class="text-sm text-gray-500">$49.99/month</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jan 15, 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jan 15, 2024</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full overflow-hidden bg-gray-100">
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Member">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Jane Smith</div>
                                        <div class="text-sm text-gray-500">janesmith@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Standard Plan</div>
                                <div class="text-sm text-gray-500">$29.99/month</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 5, 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Sep 5, 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full overflow-hidden bg-gray-100">
                                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Member">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Robert Johnson</div>
                                        <div class="text-sm text-gray-500">robertj@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Basic Plan</div>
                                <div class="text-sm text-gray-500">$19.99/month</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 10, 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">May 10, 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Expiring Soon</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="flex justify-between items-center mt-6">
                <div class="text-sm text-gray-700">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">187</span> members
                </div>
                <div class="flex space-x-1">
                    <button class="px-3 py-1 border rounded-md text-sm">Previous</button>
                    <button class="px-3 py-1 border rounded-md bg-blue-600 text-white text-sm">1</button>
                    <button class="px-3 py-1 border rounded-md text-sm">2</button>
                    <button class="px-3 py-1 border rounded-md text-sm">3</button>
                    <button class="px-3 py-1 border rounded-md text-sm">Next</button>
                </div>
            </div>
        </x-card>
    </section>

    <!-- Settings Section -->
    <section class="mb-12">
        <x-section-title title="Settings">
            Configure your gym settings and parameters
        </x-section-title>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <x-card title="Business Hours" icon="fas fa-clock">
                <form class="space-y-4">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="font-medium">Day</div>
                        <div class="font-medium">Open</div>
                        <div class="font-medium">Close</div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 items-center">
                        <div>Monday</div>
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="06:00">
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="22:00">
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 items-center">
                        <div>Tuesday</div>
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="06:00">
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="22:00">
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 items-center">
                        <div>Wednesday</div>
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="06:00">
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="22:00">
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 items-center">
                        <div>Thursday</div>
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="06:00">
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="22:00">
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 items-center">
                        <div>Friday</div>
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="06:00">
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="22:00">
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 items-center">
                        <div>Saturday</div>
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="08:00">
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="20:00">
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 items-center">
                        <div>Sunday</div>
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="08:00">
                        <input type="time" class="border border-gray-300 rounded-md p-2" value="18:00">
                    </div>
                    
                    <div>
                        <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                            Save Hours
                        </button>
                    </div>
                </form>
            </x-card>
            
            <div class="space-y-6">
                <x-card title="Contact Information" icon="fas fa-phone">
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Phone Number</label>
                            <input type="tel" value="(555) 123-4567" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Alternate Phone</label>
                            <input type="tel" value="(555) 987-6543" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Email Address</label>
                            <input type="email" value="info@fitnessplus.example.com" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        
                        <div>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                                Update Contact Info
                            </button>
                        </div>
                    </form>
                </x-card>
                
                <x-card title="Social Media" icon="fas fa-share-alt">
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">
                                <i class="fab fa-facebook text-blue-600 mr-1"></i> Facebook
                            </label>
                            <input type="url" value="https://facebook.com/fitnessplus" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">
                                <i class="fab fa-instagram text-pink-600 mr-1"></i> Instagram
                            </label>
                            <input type="url" value="https://instagram.com/fitnessplus" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">
                                <i class="fab fa-twitter text-blue-400 mr-1"></i> Twitter
                            </label>
                            <input type="url" value="https://twitter.com/fitnessplus" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        
                        <div>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                                Update Social Links
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