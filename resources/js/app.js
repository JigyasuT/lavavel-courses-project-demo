// Navbar toggle
const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

if (menuBtn) {
    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
}

// Carousel
const carousel = document.getElementById("carousel");

if (carousel) {
    let index = 0;
    const total = 3;

    setInterval(() => {
        index = (index + 1) % total;
        carousel.style.transform = `translateX(-${index * 100}%)`;
    }, 4000);
}
