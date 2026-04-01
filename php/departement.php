<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Département</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php include("header.php");?>
    <?php include("formations.php");?>
    <section>
    <?php include("equipe.php");?>
    <h2>Equipe enseignante</h2>
    <div class="carousel-wrapper">
        <div class="carousel-track" id="carouselTrackDept">
            <?php foreach ($professeurs as $index => $professeur): ?>
                <div class="carousel-slide" data-index="<?= $index ?>">
                    <img src="../img/<?= $professeur['image'] ?>" alt="<?= $professeur['nom'] ?>" onerror="this.src='img/default.jpg'">
                    <p><?= $professeur['nom'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="carousel-controls">
            <button onclick="moveCarouselDept(-1)">&#8592;</button>
            <button onclick="moveCarouselDept(1)">&#8594;</button>
        </div>
    </div>
<script type="text/javascript" src="script.js"></script>
<script>
        // On récupère la piste et toutes les slides
        var piste  = document.getElementById("piste");
        var slides = document.querySelectorAll(".slide");

        // On commence à la slide numéro 0 (la première)
        var slideActuelle = 0;

        // Fonction : aller à la slide suivante
        function suivant() {
            slideActuelle = slideActuelle + 1;

            // Si on dépasse la dernière, on revient à la première
            if (slideActuelle >= slides.length) {
                slideActuelle = 0;
            }

            deplacer();
        }

        // Fonction : aller à la slide précédente
        function precedent() {
            slideActuelle = slideActuelle - 1;

            // Si on est avant la première, on va à la dernière
            if (slideActuelle < 0) {
                slideActuelle = slides.length - 1;
            }

            deplacer();
        }

        // Fonction : déplace la piste pour afficher la bonne slide
        function deplacer() {
            piste.style.transform = "translateX(-" + (slideActuelle * 100) + "%)";
        }
    </script>

    <?php include("permanence.php");?>
    <?php
        if(isset($_POST['nom'])){   
            echo '<h2> Résumé de votre permanence</h2>' ;

            echo '<p><strong>Nom :</strong> '.$_POST['nom'].'</p>';
            echo '<p><strong>Mot de passe :</strong> '.$_POST['password'].'</p>';
            echo '<p><strong>Role :</strong> '.$_POST['role'].'</p>';
            echo '<p><strong>Email :</strong> '.$_POST['email'].'</p>';
            echo '<p><strong>Classe :</strong> '.$_POST['classe'].'</p>';
            echo '<p><strong>Date :</strong> '.$_POST['date'].'</p>';
            echo '<p><strong>Heure :</strong> '.$_POST['heure'].'</p>';
            echo '<p><strong>Salle :</strong> '.$_POST['salle'].'</p>';
        }
    ?>
    <?php include ("message.php");?>
    <?php include("basededonne.php");?>
    <input type="button" value="Réinitialiser la base" onclick="resetDatabase()">
    </section>
    <?php include("footer.php");?>
</body>
</html>