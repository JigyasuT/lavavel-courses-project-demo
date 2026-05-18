@props([
    'icon' => '💻',
    'title' => 'Course Title',
    'description' => 'Course Description'
])

<div
    class="bg-white rounded-2xl shadow-md hover:shadow-2xl hover:scale-105 transition-all duration-300 p-5 text-center"
>

    {{-- Icon --}}
    <div class="text-4xl mb-4">
        {{ $icon }}
    </div>

    {{-- Title --}}
    <h3 class="text-lg font-bold text-gray-800">
        {{ $title }}
    </h3>

    {{-- Description --}}
    <p class="mt-2 text-sm text-gray-500">
        {{ $description }}
    </p>

    {{-- Buttons --}}
    <div class="mt-5 flex flex-col gap-3">

        <button
            class="bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg text-sm font-semibold transition duration-300"
        >
            Get Course
        </button>

        <button
            class="border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white py-2 rounded-lg text-sm font-semibold transition duration-300"
        >
            Course Description
        </button>

    </div>

</div>