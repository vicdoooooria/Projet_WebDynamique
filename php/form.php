<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include("header.php");?>
    <section>
        <h1>Formulaire de contact</h1>
        <form>
            <label>Name</label>
            <input type="text" name="name">
            <label>Email</label>
            <input type="email" name="email">
            <label>Subject</label>
            <input type="text" name="subject">
            <label>Message</label>
            <textarea name="message"></textarea>
            <input type="button" value="Envoyer">
        </form>
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