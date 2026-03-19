<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="../css/style.css">
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
        <h2>Ou sommes nous ?</h2>
        <h3>Trouvez nous dans deux villes en France !</h3>
        <ul>
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
        <h3>Carte</h3>
        <!-- Intégration d'une carte Google Maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!">
    </section>
    <?php include("footer.php");?>
</body>