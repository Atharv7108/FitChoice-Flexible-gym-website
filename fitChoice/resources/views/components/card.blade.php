@props(['title' => '', 'icon' => '', 'class' => ''])

<div {{ $attributes->merge(['class' => 'bg-white shadow-md rounded-lg overflow-hidden ' . $class]) }}>
    <div class="p-5">
        @if($icon)
        <div class="flex items-center mb-4">
            <i class="{{ $icon }} text-gray-600 mr-3 text-xl"></i>
            <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
        </div>
        @else
        <h3 class="text-lg font-semibold text-gray-800 mb-4">{{ $title }}</h3>
        @endif

        <div class="text-gray-700">
            {{ $slot }}
        </div>
    </div>
</div> 