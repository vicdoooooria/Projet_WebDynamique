let currentSlide = 0;
const ITEMS_PER_SLIDE = 1;
let track, dots, total, totalSlides;

let currentSlideDept = 0;
let trackDept, totalDept;

document.addEventListener("DOMContentLoaded", () => {

    // accueil
    track = document.getElementById('carouselTrack');
    const dotsContainer = document.getElementById('carouselDots');

    if (track && dotsContainer) {
        total = track.children.length;
        totalSlides = Math.ceil(total / ITEMS_PER_SLIDE);

        // dots dynamiques
        dotsContainer.innerHTML = '';
        for (let i = 0; i < totalSlides; i++) {
            const span = document.createElement('span');
            if (i === 0) span.classList.add('active');
            span.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(span);
        }
        dots = dotsContainer.querySelectorAll('span');
    }

    //dep
    trackDept = document.getElementById('carouselTrackDept');
    if (trackDept) {
        totalDept = trackDept.children.length;
    }
});

// actualites
function moveCarousel(dir) {
    currentSlide = (currentSlide + dir + totalSlides) % totalSlides;
    updateCarousel();
}
function goToSlide(index) {
    currentSlide = index;
    updateCarousel();
}
function updateCarousel() {
    if (!track) return;
    track.style.transform = `translateX(-${currentSlide * 100}%)`;;
    dots.forEach((d, i) => d.classList.toggle('active', i === currentSlide));
}

// equipe
function moveCarouselDept(dir) {
    currentSlideDept = (currentSlideDept + dir + totalDept) % totalDept;
    updateCarouselDept();
}
function updateCarouselDept() {
    if (!trackDept) return;
    trackDept.style.transform = `translateX(-${currentSlideDept * 100}%)`;
}

function toggleMenu() {
    const header = document.getElementById('header');
    header.classList.toggle('hidden');
}

async function sendMessage() {
    let input = document.getElementById("userInput");
    let chatbox = document.getElementById("chatbox");

    let message = input.value.toLowerCase();

    chatbox.innerHTML += "<p><b>Toi :</b> " + message + "</p>";

    const response = await fetch("faq.json");
    const data = await response.json();

    console.log(data);

    let found = false;

    data.forEach(item => {
        if (Array.isArray(item.question)) {
            // cas où question est un tableau
            item.question.forEach(q => {
                if (message.includes(q)) {
                    chatbox.innerHTML += "<p><b>Bot :</b> " + item.answer + "</p>";
                    found = true;
                }
            });
        } else {
            // cas où question est une string
            if (message.includes(item.question)) {
                chatbox.innerHTML += "<p><b>Bot :</b> " + item.answer + "</p>";
                found = true;
            }
        }
    });

    if (!found) {
        chatbox.innerHTML += "<p><b>Bot :</b> Désolé, je ne comprends pas votre question.</p>";
    }

    input.value = "";
}