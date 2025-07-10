<div x-data="{ showPlansModal: false }" class="group bg-gray-800 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-700">
    <div class="block">
        <!-- Image Container with Overlay -->
        <div class="relative h-64 md:h-72">
            <img class="w-full h-full object-cover" src="{{ $gymImage }}" alt="{{ $gymName }} Photo">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>

        <!-- Content Section -->
        <div class="p-6">
            <!-- Header with Rating -->
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-2xl font-bold text-white group-hover:text-[#E63946] transition-colors">{{ $gymName }}</h3>
                @if(isset($gymRating))
                    <div class="flex items-center bg-gray-700 rounded-lg px-3 py-1">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="ml-1 text-sm font-semibold text-gray-300">{{ $gymRating }}/5</span>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Info Grid -->
            <div class="space-y-4">
                <!-- Address -->
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-[#E63946]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-400">Location</p>
                        <p class="text-base text-gray-300">{{ $gymAddress }}</p>
                    </div>
                </div>

                <!-- Opening Hours -->
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-[#E63946]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-400">Hours</p>
                        <p class="text-base text-gray-300">{{ $gymTimings }}</p>
                    </div>
                </div>

                <!-- Area/Neighborhood -->
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-[#E63946]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-400">Area</p>
                        <p class="text-base text-gray-300">{{ $gymLocation }}</p>
                    </div>
                </div>
            </div>

            <!-- Action Button -->
            <div class="mt-6">
                <button @click="showPlansModal = true" class="w-full bg-[#E63946] text-white py-3 rounded-lg font-semibold hover:bg-[#d32836] transition-colors">
                    View Details
                </button>
            </div>
        </div>
    </div>

    <!-- Include Plans Modal -->
    @include('components.gym-plans-modal')
</div> 