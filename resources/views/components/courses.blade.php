<section class="w-full bg-gray-100 py-16" id="course">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Heading --}}
        <div class="text-center mb-12">

            <x-text-wrapper
                tag="h2"
                class="text-gray-900 text-3xl sm:text-4xl lg:text-5xl"
            >
                Our Popular Courses
            </x-text-wrapper>

            <x-text-wrapper
                class="mt-4 text-base sm:text-lg"
            >
                Explore trending programming and development courses
                to boost your career.
            </x-text-wrapper>

        </div>

        {{-- Courses Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

            <x-card-wrapper
                icon="💻"
                title="C Language"
                description="Learn programming fundamentals with C."
            />

            <x-card-wrapper
                icon="⚡"
                title="C++"
                description="Master object-oriented programming concepts."
            />

            <x-card-wrapper
                icon="☕"
                title="Java"
                description="Build powerful desktop and web applications."
            />

            <x-card-wrapper
                icon="🚀"
                title="MERN Stack"
                description="Become a full-stack JavaScript developer."
            />

            <x-card-wrapper
                icon="🤖"
                title="AI & ML"
                description="Explore Artificial Intelligence and Machine Learning."
            />

        </div>

    </div>

</section>