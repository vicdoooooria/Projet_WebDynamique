<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.php");?>
    <section>
        <fieldset>
            <h1>Formulaire de contact</h1>
            <form>
                <input type="radio" name="gender" value="male">
                <label for="male">Homme</label>
                <input type="radio" name="gender" value="female">
                <label for="female">Femme</label>
                <input type="radio" name="gender" value="autre">
                <label for="autre">Autre</label>
                <label>Nom</label>
                <input type="text" name="name">
                <label>Email</label>
                <input type="email" name="email">
                <label>Date de contact</label>
                <input type="date" name="contact_date">
                <label>Sujet</label>
                <select name="subject">
                    <option value="general">Général</option>
                    <option value="partnership">Partenariat</option>
                    <option value="feedback">Feedback</option>
                    <option value="other">Autre</option>
                </select>
                <label>Message</label>
                <textarea name="message"></textarea>
                <input type="button" value="Envoyer">
            </form>
        </fieldset>
    </section>
    <section>
        <h2>Où sommes nous ?</h2>
        <h3>Trouvez nous dans deux villes en France !</h3>
        <ul class="localisation">
            <li>
                Paris
                <ul>
                    <li>La Maison, 30-32 Av de la République, 94800 Villejuif</li>
                    <li>La Factory, 136 bis Boulevard Maxime Gorki 94800 Villejuif</li>
                    <li>L'Aquarium, 143-145 Bd Maxime Gorki, 94800 Villejuif</li>
                    <li>New Republic, 33 Av de la République, 94800 Villejuif</li>
                </ul>
            </li>
            <li>
                Bordeaux
                <ul>
                    <li>Campus Bordeaux, 83 Rue Lucien Faure, 33000 Bordeaux</li>
                </ul>
            </li>
        </ul>
    </section>
    <section>
        <h2>Plan d'accès</h2>
        <h3>Carte Paris</h3>
        <!-- carte Google Maps -->
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.6423331874075!2d2.361176376000874!3d48.78871817132278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673e24e04a9c3%3A0xc55cb3e676f95321!2sEfrei!5e0!3m2!1sen!2sfr!4v1774339897045!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h3>Carte Bordeaux</h3>
        <!-- carte Google Maps -->
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3362.8857044565334!2d-0.5617589670903873!3d44.86558179022315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527262e930981%3A0xf0bb43d82fd2d407!2sEfrei%20Bordeaux%20-%20Panth%C3%A9on-Assas%20University%20Paris%20II!5e0!3m2!1sen!2sfr!4v1774431884373!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <?php include("footer.php");?>
</body>