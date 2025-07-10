@props(['title'])

<div id="{{ \Illuminate\Support\Str::slug($title) }}" class="border-b border-gray-200 pb-3 mb-6 scroll-mt-24">
    <h2 class="text-2xl font-bold text-gray-800">{{ $title }}</h2>
    <p class="text-gray-600">{{ $slot }}</p>
</div> 