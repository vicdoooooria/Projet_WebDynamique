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
