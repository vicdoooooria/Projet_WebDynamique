let currentSlide = 0;

function moveCarousel(dir) {
    const track = document.getElementById('carouselTrack');
    const total = track ? track.children.length : 0;
    currentSlide = (currentSlide + dir + total) % total;
    updateCarousel();
}

function goToSlide(index) {
    currentSlide = index;
    updateCarousel();
}

function updateCarousel() {
    const track = document.getElementById('carouselTrack');
    const dots = document.querySelectorAll('#carouselDots span');
    if (!track) return;
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle('active', i === currentSlide));
}

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('menu-button');
    const header = document.querySelector('header');

    if (btn && header) {
        btn.addEventListener('click', () => {
            header.classList.toggle('open');
        });
    }
});