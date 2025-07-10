@extends('layouts.app')

@section('title', 'Find Gyms')

@section('content')
<div class="min-h-screen bg-gray-900">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-[#1a1a1a] to-[#2d2d2d] py-16">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white text-center mb-8">Discover Your Perfect Gym</h1>
            <p class="text-gray-300 text-center text-lg max-w-2xl mx-auto">
                Find the best gyms in your area with state-of-the-art equipment and expert trainers
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Filters Section -->
        <div class="mb-8 grid grid-cols-1 md:grid-cols-4 gap-4">
            <select class="rounded-lg bg-gray-800 border-gray-700 text-gray-300 focus:ring-[#E63946] focus:border-[#E63946]">
                <option value="">Sort by Rating</option>
                <option value="high">Highest Rated</option>
                <option value="low">Lowest Rated</option>
            </select>
            <select class="rounded-lg bg-gray-800 border-gray-700 text-gray-300 focus:ring-[#E63946] focus:border-[#E63946]">
                <option value="">Price Range</option>
                <option value="low">Budget Friendly</option>
                <option value="mid">Mid Range</option>
                <option value="high">Premium</option>
            </select>
            <select class="rounded-lg bg-gray-800 border-gray-700 text-gray-300 focus:ring-[#E63946] focus:border-[#E63946]">
                <option value="">Facilities</option>
                <option value="pool">Swimming Pool</option>
                <option value="cardio">Cardio Area</option>
                <option value="classes">Group Classes</option>
            </select>
            <select class="rounded-lg bg-gray-800 border-gray-700 text-gray-300 focus:ring-[#E63946] focus:border-[#E63946]">
                <option value="">Opening Hours</option>
                <option value="24">24/7</option>
                <option value="early">Early Morning</option>
                <option value="late">Late Night</option>
            </select>
        </div>

        <!-- Search Results Header -->
        @if(isset($search) && $search)
            <div class="bg-gray-800 shadow-lg rounded-lg p-6 mb-8 border border-gray-700">
                <h2 class="text-2xl font-semibold text-white">
                    Search Results for: <span class="text-[#E63946]">{{ $search }}</span>
                </h2>
                <p class="text-gray-400 mt-2">
                    Found {{ isset($gyms) ? count($gyms) : 0 }} gyms matching your search
                </p>
            </div>
        @endif

        <!-- No Results Message -->
        @if(isset($gyms) && count($gyms) == 0)
            <div class="text-center py-16 bg-gray-800 rounded-lg shadow-lg border border-gray-700">
                <div class="max-w-md mx-auto">
                    <svg class="w-16 h-16 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <h3 class="text-xl font-semibold text-white mb-2">No gyms found</h3>
                    <p class="text-gray-400 mb-6">Try adjusting your search criteria or browse all available gyms</p>
                    <a href="{{ route('findgym') }}" 
                       class="inline-block px-6 py-3 bg-[#E63946] text-white rounded-lg hover:bg-[#d32836] transition-colors shadow-md">
                        View All Gyms
                    </a>
                </div>
            </div>
        @endif

        <!-- Gym Results Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @if(isset($gyms))
                @foreach($gyms as $gym)
                    <div class="transform hover:scale-[1.02] transition-transform duration-300">
                        @include('layouts.gymCard', [
                            'gymLink' => '#',
                            'gymImage' => asset($gym['image']),
                            'gymName' => $gym['name'],
                            'gymAddress' => $gym['address'],
                            'gymTimings' => $gym['timings'],
                            'gymLocation' => $gym['location'],
                            'gymRating' => $gym['rating']
                        ])
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .gym-card-enter {
        opacity: 0;
        transform: translateY(20px);
    }
    .gym-card-enter-active {
        opacity: 1;
        transform: translateY(0);
        transition: opacity 300ms, transform 300ms;
    }
</style>
@endpush 