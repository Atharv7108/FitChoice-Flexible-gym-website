@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-2">Profile</h1>
        <p class="text-gray-600 mb-8">Manage your personal information and preferences</p>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="flex items-center mb-6">
                <div class="w-32 h-32 rounded-full overflow-hidden mr-6">
                    <img src="{{ $user->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($user->name) }}" 
                         alt="{{ $user->name }}" 
                         class="w-full h-full object-cover">
                </div>
                <div>
                    <h2 class="text-2xl font-semibold">{{ $user->name }}</h2>
                    <p class="text-gray-600">Member since {{ $user->created_at->format('Y') }}</p>
                    <button class="mt-2 px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition">
                        Change Photo
                    </button>
                </div>
            </div>

            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                        <input type="text" 
                               name="first_name" 
                               id="first_name" 
                               value="{{ old('first_name', $user->first_name) }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('first_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                        <input type="text" 
                               name="last_name" 
                               id="last_name" 
                               value="{{ old('last_name', $user->last_name) }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('last_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" 
                               name="email" 
                               id="email" 
                               value="{{ old('email', $user->email) }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <input type="tel" 
                               name="phone_number" 
                               id="phone_number" 
                               value="{{ old('phone_number', $user->phone_number) }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('phone_number')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="fitness_goals" class="block text-sm font-medium text-gray-700 mb-1">Fitness Goals</label>
                        <select name="fitness_goals" 
                                id="fitness_goals" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="Weight Loss" {{ old('fitness_goals', $user->fitness_goals) == 'Weight Loss' ? 'selected' : '' }}>Weight Loss</option>
                            <option value="Muscle Gain" {{ old('fitness_goals', $user->fitness_goals) == 'Muscle Gain' ? 'selected' : '' }}>Muscle Gain</option>
                            <option value="General Fitness" {{ old('fitness_goals', $user->fitness_goals) == 'General Fitness' ? 'selected' : '' }}>General Fitness</option>
                            <option value="Endurance" {{ old('fitness_goals', $user->fitness_goals) == 'Endurance' ? 'selected' : '' }}>Endurance</option>
                        </select>
                        @error('fitness_goals')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" 
                            class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
