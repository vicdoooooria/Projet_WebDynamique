
let currentSlide = 0;
const track = document.getElementById('carouselTrack');
const dots = document.querySelectorAll('#carouselDots span');

let total = 0;
if (track) {
    total = track.children.length;
}

 
function moveCarousel(dir) {
    currentSlide = (currentSlide + dir + total) % total;
    updateCarousel();
}
 
function goToSlide(index) {
    currentSlide = index;
    updateCarousel();
}
 
function updateCarousel() {
    if (!track) {
        return;
    }
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle('active', i === currentSlide));
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