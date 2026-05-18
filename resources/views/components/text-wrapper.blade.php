@props([
    'tag' => 'p'
])

@php
    $classes = match($tag) {
        'h2' => 'text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900',
        'h3' => 'text-lg font-bold text-gray-800',
        'p'  => 'text-sm text-gray-500',
        default => 'text-base'
    };
@endphp

<{{ $tag }}
    {{ $attributes->merge([
        'class' => $classes
    ]) }}
>
    {{ $slot }}
</{{ $tag }}>