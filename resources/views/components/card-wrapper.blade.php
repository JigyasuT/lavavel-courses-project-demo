<div
    {{ $attributes->merge([
        'class' => 'bg-white rounded-2xl shadow-md hover:shadow-2xl hover:scale-105 transition-all duration-300 p-5 text-center'
    ]) }}
>
    {{ $slot }}
</div>