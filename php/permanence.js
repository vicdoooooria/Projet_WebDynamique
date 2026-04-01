// Confirmation visuelle à la soumission du formulaire
const form = document.getElementById('reservationForm');
if (form) form.addEventListener('submit', function(event) {
    // On laisse le POST se faire normalement, on affiche juste une alerte avant
    const nom     = document.getElementById('nom').value;
    const email   = document.getElementById('email').value;
    const role    = document.getElementById('role').value;
    const classe  = document.getElementById('classe').value;
    const matiere = document.getElementById('matiere').value;
    const date    = document.getElementById('date').value;
    const heure   = document.getElementById('heure').value;
    const salle   = document.getElementById('salle').value;

    // Confirmation avant envoi (optionnel — supprimez ce bloc si vous préférez envoyer directement)
    const ok = confirm(
        `Confirmer la réservation ?\n\n` +
        `Nom : ${nom}\n` +
        `Email : ${email}\n` +
        `Rôle : ${role}\n` +
        `Classe : ${classe}\n` +
        `Matière : ${matiere}\n` +
        `Date : ${date}\n` +
        `Heure : ${heure}\n` +
        `Salle : ${salle}`
    );

    if (!ok) {
        event.preventDefault(); //evite envoi
    }
});

// reinitialisation de la base via fetch
function resetDatabase() {
    if (confirm("Êtes-vous sûr de vouloir réinitialiser la base de données ?")) {
        fetch('departement.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'reset=1'
        })
        .then(response => response.text())
        .then(() => {
            alert('Base de données réinitialisée avec succès.');
            location.reload();
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Une erreur est survenue lors de la réinitialisation.');
        });
    }
}