
let currentSlide = 0;
const track = document.getElementById('carouselTrack');
const dots = document.querySelectorAll('#carouselDots span');
const total = track.children.length;
 
function moveCarousel(dir) {
    currentSlide = (currentSlide + dir + total) % total;
    updateCarousel();
}
 
function goToSlide(index) {
    currentSlide = index;
    updateCarousel();
}
 
function updateCarousel() {
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle('active', i === currentSlide));
}

function toggleMenu() {
    const header = document.getElementById('header');
    header.classList.toggle('hidden');
}