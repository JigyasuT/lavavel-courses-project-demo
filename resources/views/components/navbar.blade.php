<section class="w-full bg-cyan-100 shadow-lg  ">
  <!-- Navbar -->
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
    <div class="flex items-center justify-between h-[70px]">
      
      <!-- Left Side Logo -->
      <div class="flex items-center">
        <img
          src="https://www.pngarts.com/files/7/Education-Course-PNG-Background-Image.png"
          alt="Logo"
          class="w-[120px] h-[60px] rounded-full object-contain p-2"
        />
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="#hero" class="text-gray-700 hover:text-blue-600 font-bold transition">
          Home
        </a>

        <a href="#about" class="text-gray-700 hover:text-blue-600 font-bold transition">
          About
        </a>

         <a href="#course" class="text-gray-700 hover:text-blue-600 font-bold transition">
          Courses
        </a>

        <a href="#contact" class="text-gray-700 hover:text-blue-600 font-bold transition">
          Contact Us
        </a>

       
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button
          id="menu-btn"
          class="text-gray-700 focus:outline-none"
        >
          <!-- Menu Icon -->
          <svg
            id="menu-icon"
            xmlns="http://www.w3.org/2000/svg"
            class="h-7 w-7 block"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>

          <!-- Close Icon -->
          <svg
            id="close-icon"
            xmlns="http://www.w3.org/2000/svg"
            class="h-7 w-7 hidden"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div
      id="mobile-menu"
      class="hidden md:hidden flex flex-col space-y-4 pb-4 pt-2"
    >
      <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">
        Home
      </a>

      <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">
        About
      </a>

      <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">
        Contact Us
      </a>

      <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">
        Courses
      </a>
    </div>
  </nav>

  <!-- JS -->
  <script>
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const menuIcon = document.getElementById("menu-icon");
    const closeIcon = document.getElementById("close-icon");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");

      menuIcon.classList.toggle("hidden");
      closeIcon.classList.toggle("hidden");
    });
  </script>
</section>