<!-- resources/views/about.blade.php -->

@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-b from-gray-900 to-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">
                About <span class="text-indigo-400">FIT CHOICE</span>
            </h1>
            <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
                Helping you discover the perfect fitness facilities that match your goals, preferences, and lifestyle.
            </p>
        </div>
    </div>
</div>

<!-- Mission & Vision Section -->
<section class="py-16 bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="bg-gray-900 rounded-xl shadow-md p-8 transform transition-all hover:scale-105 duration-300 border border-gray-700">
                <div class="inline-block p-3 bg-indigo-900 rounded-lg mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-3">Our Mission</h2>
                <p class="text-gray-300 leading-relaxed">
                    To simplify the fitness journey by connecting people with the right facilities that inspire them to achieve their health and wellness goals. We believe everyone deserves access to spaces that motivate their fitness journey.
                </p>
            </div>
            <div class="bg-gray-900 rounded-xl shadow-md p-8 transform transition-all hover:scale-105 duration-300 border border-gray-700">
                <div class="inline-block p-3 bg-indigo-900 rounded-lg mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-3">Our Vision</h2>
                <p class="text-gray-300 leading-relaxed">
                    To create a world where finding the perfect fitness environment is effortless, making healthy lifestyles accessible to all. We envision a community where everyone can discover spaces that inspire their wellness journey.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-16 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white">Our Core Values</h2>
            <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
                The principles that guide everything we do at FIT CHOICE.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-800 rounded-xl p-8 text-center border border-gray-700">
                <div class="inline-block p-3 bg-indigo-900 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Trust & Transparency</h3>
                <p class="text-gray-300">
                    We provide honest, reliable information about fitness facilities to help you make informed decisions.
                </p>
            </div>
            
            <div class="bg-gray-800 rounded-xl p-8 text-center border border-gray-700">
                <div class="inline-block p-3 bg-indigo-900 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Community-Focused</h3>
                <p class="text-gray-300">
                    We believe fitness is better together, fostering connections between people and their ideal fitness spaces.
                </p>
            </div>
            
            <div class="bg-gray-800 rounded-xl p-8 text-center border border-gray-700">
                <div class="inline-block p-3 bg-indigo-900 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Innovation</h3>
                <p class="text-gray-300">
                    We continuously improve our platform to provide the best possible experience for our users and partners.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16 bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white">Meet Our Team</h2>
            <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
                The passionate people behind FIT CHOICE dedicated to your fitness journey.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Atharv Gole -->
            <div class="bg-gray-900 rounded-xl shadow-sm p-8 text-center hover:shadow-md transition-shadow border border-gray-700">
                <div class="inline-block h-32 w-32 rounded-full overflow-hidden mb-4 ring-4 ring-indigo-900">
<!--                     <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Atharv Gole" class="h-full w-full object-cover">
 -->                </div>
                <h3 class="text-xl font-bold text-white">Atharv Gole</h3>
                <p class="text-indigo-400 font-medium mb-3">Founder & Visionary</p>
                <p class="text-gray-300">
                    Leading the vision of Fit Choice with a passion for wellness, strategy, and impactful tech.
                </p>
            </div>
            
            <!-- Sahil Tamdedkar -->
            <div class="bg-gray-900 rounded-xl shadow-sm p-8 text-center hover:shadow-md transition-shadow border border-gray-700">
                <div class="inline-block h-32 w-32 rounded-full overflow-hidden mb-4 ring-4 ring-indigo-900">
<!--                     <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Sahil Tamdedkar" class="h-full w-full object-cover">
 -->                </div>
                <h3 class="text-xl font-bold text-white">Sahil Tamdedkar</h3>
                <p class="text-indigo-400 font-medium mb-3">Operations Head</p>
                <p class="text-gray-300">
                    Keeps everything running smoothly while focusing on user-first experiences and operational excellence.
                </p>
            </div>
            
            <!-- Daksh Ghodke -->
            <div class="bg-gray-900 rounded-xl shadow-sm p-8 text-center hover:shadow-md transition-shadow border border-gray-700">
                <div class="inline-block h-32 w-32 rounded-full overflow-hidden mb-4 ring-4 ring-indigo-900">
<!--                     <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Daksh Ghodke" class="h-full w-full object-cover">
 -->                </div>
                <h3 class="text-xl font-bold text-white">Daksh Ghodke</h3>
                <p class="text-indigo-400 font-medium mb-3">Tech Architect</p>
                <p class="text-gray-300">
                    Designs and develops robust digital infrastructure to scale Fit Choice across devices and users.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Our Journey Timeline -->
<section class="py-16 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white">Our Journey</h2>
            <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
                The milestones that shaped FIT CHOICE into what it is today.
            </p>
        </div>
        
        <div class="relative">
            <!-- Timeline Line -->
            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-indigo-800"></div>
            
            <div class="space-y-12">
                <!-- 2018 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="flex-1 md:text-right md:pr-10 mb-4 md:mb-0">
                        <div class="bg-gray-800 md:ml-auto inline-block rounded-lg p-6 shadow-sm max-w-md border border-gray-700">
                            <h3 class="text-xl font-bold text-white mb-2">2018</h3>
                            <p class="text-gray-300">
                                FIT CHOICE was founded with a simple mission: help people find their ideal fitness environments.
                            </p>
                        </div>
                    </div>
                    
                    <div class="hidden md:flex h-12 w-12 rounded-full bg-indigo-600 text-white justify-center items-center z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </div>
                    
                    <div class="flex-1 md:pl-10"></div>
                </div>
                
                <!-- 2020 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="flex-1 md:text-right md:pr-10 mb-4 md:mb-0 md:order-2">
                        <div class="bg-gray-800 md:mr-auto inline-block rounded-lg p-6 shadow-sm max-w-md border border-gray-700">
                            <h3 class="text-xl font-bold text-white mb-2">2020</h3>
                            <p class="text-gray-300">
                                Expanded our platform nationwide, connecting thousands of users with their perfect fitness facilities.
                            </p>
                        </div>
                    </div>
                    
                    <div class="hidden md:flex h-12 w-12 rounded-full bg-indigo-600 text-white justify-center items-center z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                    
                    <div class="flex-1 md:pl-10 md:order-1"></div>
                </div>
                
                <!-- 2023 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="flex-1 md:text-right md:pr-10 mb-4 md:mb-0">
                        <div class="bg-gray-800 md:ml-auto inline-block rounded-lg p-6 shadow-sm max-w-md border border-gray-700">
                            <h3 class="text-xl font-bold text-white mb-2">2023</h3>
                            <p class="text-gray-300">
                                Launched our advanced matching algorithm, helping users find fitness spaces tailored precisely to their needs.
                            </p>
                        </div>
                    </div>
                    
                    <div class="hidden md:flex h-12 w-12 rounded-full bg-indigo-600 text-white justify-center items-center z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    
                    <div class="flex-1 md:pl-10"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-indigo-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to find your perfect fitness match?</h2>
        <p class="text-xl text-indigo-200 mb-8 max-w-3xl mx-auto">
            Join thousands of others who have discovered their ideal fitness environment with FIT CHOICE.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('register') }}" class="inline-block bg-indigo-500 text-white font-bold px-8 py-3 rounded-lg shadow-lg hover:bg-indigo-600 transition duration-300 transform hover:scale-105">
                Sign Up Now
            </a>
            <a href="{{ route('about') }}" class="inline-block bg-transparent text-white border-2 border-indigo-400 font-bold px-8 py-3 rounded-lg hover:bg-indigo-800 transition duration-300 transform hover:scale-105">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection