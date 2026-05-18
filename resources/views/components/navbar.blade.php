<section class="w-full bg-cyan-100 shadow-lg">

    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between h-[70px]">

            {{-- Logo --}}
            <div>
                <img
                    src="https://www.pngarts.com/files/7/Education-Course-PNG-Background-Image.png"
                    alt="Logo"
                    class="w-[120px] h-[60px] object-contain"
                />
            </div>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex space-x-8 font-bold">

                <a href="#hero" class="hover:text-blue-600">
                    Home
                </a>

                <a href="#about" class="hover:text-blue-600">
                    About
                </a>

                <a href="#course" class="hover:text-blue-600">
                    Courses
                </a>

                <a href="#contact" class="hover:text-blue-600">
                    Contact
                </a>

            </div>

            {{-- Mobile Button --}}
            <button id="menu-btn" class="md:hidden text-2xl">
                ☰
            </button>

        </div>

        {{-- Mobile Menu --}}
        <div
            id="mobile-menu"
            class="hidden md:hidden flex flex-col space-y-3 pb-4 font-semibold"
        >

            <a href="#hero">Home</a>
            <a href="#about">About</a>
            <a href="#course">Courses</a>
            <a href="#contact">Contact</a>

        </div>

    </nav>

</section>