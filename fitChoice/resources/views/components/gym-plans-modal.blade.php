<!-- Gym Plans Modal -->
<div x-show="showPlansModal" 
     x-cloak 
     class="fixed inset-0 z-50 overflow-y-auto"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0">
    
    <!-- Overlay -->
    <div class="fixed inset-0 bg-black bg-opacity-75 transition-opacity"></div>

    <!-- Modal Content -->
    <div class="relative min-h-screen flex items-center justify-center p-4">
        <div class="relative bg-gray-900 rounded-xl max-w-4xl w-full mx-auto shadow-2xl border border-gray-700">
            <!-- Close Button -->
            <button @click="showPlansModal = false" class="absolute top-4 right-4 text-gray-400 hover:text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Modal Header -->
            <div class="p-6 border-b border-gray-700">
                <h2 class="text-2xl font-bold text-white">Choose Your Membership Plan</h2>
                <p class="mt-2 text-gray-400">Select the plan that best fits your fitness journey</p>
            </div>

            <!-- Plans Grid -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Day-wise Plan -->
                    <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 hover:border-[#E63946] transition-colors">
                        <div class="text-center mb-6">
                            <h3 class="text-xl font-bold text-white mb-2">Day-wise Plan</h3>
                            <div class="text-3xl font-bold text-[#E63946]">₹200<span class="text-sm text-gray-400">/day</span></div>
                            <p class="text-sm text-gray-400 mt-2">Min. 10 days required</p>
                        </div>
                        
                        <!-- Day Selector -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-400 mb-2">Select Days</label>
                            <div class="relative">
                                <input type="number" 
                                       min="10" 
                                       max="30" 
                                       class="w-full bg-gray-700 border-gray-600 rounded-lg text-white px-4 py-2"
                                       placeholder="Enter number of days">
                            </div>
                        </div>

                        <button class="w-full bg-[#E63946] text-white py-3 rounded-lg font-semibold hover:bg-[#d32836] transition-colors mt-4">
                            Select Plan
                        </button>
                    </div>

                    <!-- Monthly Plan -->
                    <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 hover:border-[#E63946] transition-colors">
                        <div class="text-center mb-6">
                            <h3 class="text-xl font-bold text-white mb-2">Monthly Plan</h3>
                            <div class="text-3xl font-bold text-[#E63946]">₹3000<span class="text-sm text-gray-400">/month</span></div>
                            <p class="text-sm text-gray-400 mt-2">Full month access</p>
                        </div>
                        
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Unlimited access
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                All facilities included
                            </li>
                        </ul>

                        <button class="w-full bg-[#E63946] text-white py-3 rounded-lg font-semibold hover:bg-[#d32836] transition-colors mt-4">
                            Select Plan
                        </button>
                    </div>

                    <!-- Yearly Plan -->
                    <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 hover:border-[#E63946] transition-colors">
                        <div class="text-center mb-6">
                            <h3 class="text-xl font-bold text-white mb-2">Yearly Plan</h3>
                            <div class="text-3xl font-bold text-[#E63946]">₹30000<span class="text-sm text-gray-400">/year</span></div>
                            <p class="text-sm text-gray-400 mt-2">Save 17% annually</p>
                        </div>
                        
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Best value for money
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Premium member benefits
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                2 months free
                            </li>
                        </ul>

                        <button class="w-full bg-[#E63946] text-white py-3 rounded-lg font-semibold hover:bg-[#d32836] transition-colors mt-4">
                            Select Plan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 