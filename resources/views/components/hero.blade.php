<section class="w-full bg-white py-12" id="hero">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-10 gap-10 items-center">

            {{-- Left Content --}}
            <div class="lg:col-span-3 text-center lg:text-left">

                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 leading-tight">
                    Learn New Skills <br />
                    Build Your Future
                </h1>

                <p class="mt-6 text-gray-600 text-lg leading-relaxed">
                    Explore professional courses and improve your skills with expert
                    guidance. Join thousands of learners and start your journey today.
                </p>

                <button
                    class="mt-8 px-6 py-3 bg-black hover:bg-gray-800 text-white rounded-lg font-semibold transition duration-300"
                >
                    Get Started
                </button>

            </div>

            {{-- Right Carousel --}}
            <div class="lg:col-span-7 relative w-full">

                {{-- Carousel Container --}}
                <div class="overflow-hidden rounded-2xl shadow-xl">

                    <div
                        id="carousel"
                        class="flex transition-transform duration-500 ease-in-out"
                    >

                        {{-- Image 1 --}}
                        <img
                            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop"
                            class="w-full flex-shrink-0 h-[250px] sm:h-[350px] lg:h-[450px] object-cover"
                            alt="Students"
                        />

                        {{-- Image 2 --}}
                        <img
                            src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200&auto=format&fit=crop"
                            class="w-full flex-shrink-0 h-[250px] sm:h-[350px] lg:h-[450px] object-cover"
                            alt="Learning"
                        />

                        {{-- Image 3 --}}
                        <img
                            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop"
                            class="w-full flex-shrink-0 h-[250px] sm:h-[350px] lg:h-[450px] object-cover"
                            alt="Programming"
                        />

                    </div>

                </div>

                {{-- Previous Button --}}
                <button
                    id="prevBtn"
                    class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-black w-10 h-10 rounded-full shadow-md flex items-center justify-center"
                >
                    &#10094;
                </button>

                {{-- Next Button --}}
                <button
                    id="nextBtn"
                    class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-black w-10 h-10 rounded-full shadow-md flex items-center justify-center"
                >
                    &#10095;
                </button>

            </div>

        </div>

    </div>

</section>

{{-- Slider Script --}}
<script>

    document.addEventListener("DOMContentLoaded", () => {

        const carousel = document.getElementById("carousel");
        const nextBtn = document.getElementById("nextBtn");
        const prevBtn = document.getElementById("prevBtn");

        let currentIndex = 0;
        const totalSlides = 3;

        function updateCarousel() {
            carousel.style.transform =
                `translateX(-${currentIndex * 100}%)`;
        }

        nextBtn.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        });

        prevBtn.addEventListener("click", () => {
            currentIndex =
                (currentIndex - 1 + totalSlides) % totalSlides;

            updateCarousel();
        });

        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        }, 4000);

    });

</script>