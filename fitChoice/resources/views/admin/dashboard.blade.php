@extends('layouts.main')

@section('title', 'Admin Dashboard')

@section('content')
<div class="py-6">
    <!-- Welcome Section -->
    <!-- <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Admin Dashboard</h1>
        <p class="text-gray-600">Manage your fitness platform from a central location</p>
    </div> -->

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <x-card>
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 mr-4">
                    <i class="fas fa-users text-blue-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-gray-500 text-sm font-medium">Total Users</h3>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-gray-800">1,248</span>
                        <span class="text-sm font-medium text-green-600 ml-2">+8.4%</span>
                    </div>
                </div>
            </div>
        </x-card>
        
        <x-card>
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 mr-4">
                    <i class="fas fa-dumbbell text-green-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-gray-500 text-sm font-medium">Active Gyms</h3>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-gray-800">42</span>
                        <span class="text-sm font-medium text-green-600 ml-2">+12%</span>
                    </div>
                </div>
            </div>
        </x-card>
        
        <x-card>
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 mr-4">
                    <i class="fas fa-ticket-alt text-purple-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-gray-500 text-sm font-medium">Active Subscriptions</h3>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-gray-800">892</span>
                        <span class="text-sm font-medium text-green-600 ml-2">+5.2%</span>
                    </div>
                </div>
            </div>
        </x-card>
        
        <x-card>
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-red-100 mr-4">
                    <i class="fas fa-exclamation-circle text-red-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-gray-500 text-sm font-medium">Pending Approvals</h3>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-gray-800">7</span>
                        <span class="text-sm font-medium text-yellow-600 ml-2">Action Required</span>
                    </div>
                </div>
            </div>
        </x-card>
    </div>

    <!-- Manage Users Section -->
    <section class="mb-12">
        <x-section-title title="Manage Users">
            View and manage user accounts on the platform
        </x-section-title>
        
        <x-card>
            <div class="flex justify-between items-center mb-6">
                <div class="relative">
                    <input type="text" placeholder="Search users..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-md w-64">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                
                <div class="flex space-x-2">
                    <button class="bg-white border border-gray-300 text-gray-700 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-50">
                        <i class="fas fa-filter mr-1"></i> Filter
                    </button>
                    <button class="bg-blue-600 text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                        <i class="fas fa-plus mr-1"></i> Add User
                    </button>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Membership</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Joined</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full overflow-hidden bg-gray-100">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">John Doe</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">john.doe@example.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Premium</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jan 15, 2023</td>
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
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Jane Smith</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">jane.smith@example.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Basic</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 22, 2023</td>
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
                                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="User">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Robert Johnson</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">robert.j@example.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Trial</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 5, 2023</td>
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">1,248</span> results
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

    <!-- Manage Gyms Section -->
    <section class="mb-12">
        <x-section-title title="Manage Gyms">
            Track and manage registered gyms across the platform
        </x-section-title>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <x-card>
                <div class="flex justify-between mb-4">
                    <h3 class="text-lg font-semibold">Recently Added Gyms</h3>
                    <button class="text-blue-600 text-sm">View All</button>
                </div>
                
                <div class="space-y-4">
                    <div class="border-b pb-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-medium text-gray-800">Fitness Plus</h4>
                                <p class="text-sm text-gray-600">Added by: Michael Brown</p>
                                <p class="text-xs text-gray-500">Apr 15, 2023</p>
                            </div>
                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span>
                        </div>
                    </div>
                    
                    <div class="border-b pb-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-medium text-gray-800">PowerLift Gym</h4>
                                <p class="text-sm text-gray-600">Added by: Sarah Wilson</p>
                                <p class="text-xs text-gray-500">Apr 10, 2023</p>
                            </div>
                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span>
                        </div>
                    </div>
                    
                    <div class="pb-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-medium text-gray-800">CardioFit Studio</h4>
                                <p class="text-sm text-gray-600">Added by: Jessica Lee</p>
                                <p class="text-xs text-gray-500">Apr 5, 2023</p>
                            </div>
                            <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                        </div>
                    </div>
                </div>
            </x-card>
            
            <x-card>
                <div class="flex justify-between mb-4">
                    <h3 class="text-lg font-semibold">Gym Approval Requests</h3>
                    <button class="text-blue-600 text-sm">View All</button>
                </div>
                
                <div class="space-y-4">
                    <div class="border-b pb-4">
                        <div class="flex items-start">
                            <div class="flex-grow">
                                <h4 class="font-medium text-gray-800">Elite Training Center</h4>
                                <p class="text-sm text-gray-600">Owner: Jason Taylor</p>
                                <p class="text-xs text-gray-500">Submitted: Apr 18, 2023</p>
                            </div>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 bg-green-600 text-white text-xs rounded-md">Approve</button>
                                <button class="px-3 py-1 bg-red-600 text-white text-xs rounded-md">Reject</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-b pb-4">
                        <div class="flex items-start">
                            <div class="flex-grow">
                                <h4 class="font-medium text-gray-800">CrossTraining Hub</h4>
                                <p class="text-sm text-gray-600">Owner: Mark Anderson</p>
                                <p class="text-xs text-gray-500">Submitted: Apr 16, 2023</p>
                            </div>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 bg-green-600 text-white text-xs rounded-md">Approve</button>
                                <button class="px-3 py-1 bg-red-600 text-white text-xs rounded-md">Reject</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pb-4">
                        <div class="flex items-start">
                            <div class="flex-grow">
                                <h4 class="font-medium text-gray-800">Yoga & Wellness Studio</h4>
                                <p class="text-sm text-gray-600">Owner: Emma Roberts</p>
                                <p class="text-xs text-gray-500">Submitted: Apr 14, 2023</p>
                            </div>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 bg-green-600 text-white text-xs rounded-md">Approve</button>
                                <button class="px-3 py-1 bg-red-600 text-white text-xs rounded-md">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>
    </section>

    <!-- Reports Section -->
    <section class="mb-12">
        <x-section-title title="Reports">
            Analytics and statistics about platform usage
        </x-section-title>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <x-card title="New Users Trend" icon="fas fa-chart-line">
                <div class="h-64 flex items-center justify-center bg-gray-50 rounded-lg border border-gray-200">
                    <div class="w-full px-4">
                        <div class="flex justify-between mb-2">
                            <div class="text-xs text-gray-500">April</div>
                            <div class="text-xs text-gray-500">May</div>
                            <div class="text-xs text-gray-500">June</div>
                            <div class="text-xs text-gray-500">July</div>
                        </div>
                        <div class="relative h-40">
                            <!-- Visual representation of a line chart -->
                            <div class="absolute bottom-0 left-0 w-full h-px bg-gray-300"></div>
                            <div class="absolute bottom-1/4 left-0 w-full h-px bg-gray-200"></div>
                            <div class="absolute bottom-2/4 left-0 w-full h-px bg-gray-200"></div>
                            <div class="absolute bottom-3/4 left-0 w-full h-px bg-gray-200"></div>
                            
                            <!-- Chart bars -->
                            <div class="absolute bottom-0 left-[10%] w-4 bg-blue-500 rounded-t-sm" style="height: 30%;"></div>
                            <div class="absolute bottom-0 left-[25%] w-4 bg-blue-500 rounded-t-sm" style="height: 45%;"></div>
                            <div class="absolute bottom-0 left-[40%] w-4 bg-blue-500 rounded-t-sm" style="height: 65%;"></div>
                            <div class="absolute bottom-0 left-[55%] w-4 bg-blue-500 rounded-t-sm" style="height: 40%;"></div>
                            <div class="absolute bottom-0 left-[70%] w-4 bg-blue-500 rounded-t-sm" style="height: 70%;"></div>
                            <div class="absolute bottom-0 left-[85%] w-4 bg-blue-500 rounded-t-sm" style="height: 80%;"></div>
                        </div>
                    </div>
                </div>
            </x-card>
            
            <x-card title="Membership Distribution" icon="fas fa-chart-pie">
                <div class="h-64 flex items-center justify-center bg-gray-50 rounded-lg border border-gray-200">
                    <div class="w-48 h-48 relative">
                        <!-- Visual representation of pie chart -->
                        <div class="absolute inset-0 rounded-full border-8 border-blue-500" style="clip-path: polygon(50% 50%, 100% 0%, 100% 100%);"></div>
                        <div class="absolute inset-0 rounded-full border-8 border-green-500" style="clip-path: polygon(50% 50%, 100% 100%, 0% 100%, 0% 50%);"></div>
                        <div class="absolute inset-0 rounded-full border-8 border-purple-500" style="clip-path: polygon(50% 50%, 0% 50%, 0% 0%, 50% 0%);"></div>
                        <div class="absolute inset-0 rounded-full border-8 border-yellow-500" style="clip-path: polygon(50% 50%, 50% 0%, 100% 0%);"></div>
                        
                        <!-- Center white circle -->
                        <div class="absolute inset-[15%] bg-white rounded-full"></div>
                    </div>
                </div>
                
                <div class="flex flex-wrap justify-center gap-4 mt-4">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                        <span class="text-sm">Premium (42%)</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                        <span class="text-sm">Standard (33%)</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-purple-500 rounded-full mr-2"></div>
                        <span class="text-sm">Basic (15%)</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                        <span class="text-sm">Trial (10%)</span>
                    </div>
                </div>
            </x-card>
        </div>
        
        <x-card title="Revenue Overview" icon="fas fa-dollar-sign">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Month</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Revenue</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">New Subscriptions</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Churned</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Growth</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">July 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$52,489</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">124</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+12.4%</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">June 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$48,928</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">108</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">22</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+8.2%</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">May 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$45,231</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">96</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">28</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+5.3%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>
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