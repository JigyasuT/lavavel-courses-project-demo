@props(['tag' => 'p'])

@php
    $classes = match($tag) {
        'h1' => 'text-4xl font-bold',
        'h2' => 'text-3xl font-bold',
        'h3' => 'text-xl font-bold',
        default => 'text-gray-600'
    };
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $tag }}>