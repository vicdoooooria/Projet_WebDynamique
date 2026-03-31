<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Département</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>

    <?php include("header.php");?>
    <?php include("formations.php");?>
    <?php include("permanence.php");?>
    <section>
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
    <input type="button" name="reset" value="Réinitialiser la base">
    </section>
    <?php include("footer.php");?>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>