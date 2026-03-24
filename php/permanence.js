document.getElementById('reservationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Récupérer les valeurs du formulaire
    const nom = document.getElementById('nom').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const role = document.getElementById('role').value;
    const classe = document.getElementById('classe').value;
    const matiere = document.getElementById('matiere').value;
    const date = document.getElementById('date').value;
    const heure = document.getElementById('heure').value;
    const salle = document.getElementById('salle').value;

    // Afficher un message de confirmation
    alert(`Votre réservation a été enregistrée :
    \nNom : ${nom}
    \nEmail : ${email}
    \nRôle : ${role}
    \nClasse : ${classe}
    \nMatière : ${matiere}
    \nDate : ${date}
    \nHeure : ${heure}
    \nSalle : ${salle}`);


    // Réinitialiser le formulaire
    this.reset();
});

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
