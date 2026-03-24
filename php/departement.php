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
    <?php include("equipe.php");?>
    <?php
        if(isset($_POST['nom'])){ 
            echo '<h2> Résumé de votre formulaire</h2>' ;

            echo '<p><strong>Nom :</strong> '.$_POST['nom'].' '.$_POST['prenom'].'</p>';
            echo '<p><strong>Date de naissance :</strong> '.$_POST['date'].'</p>';
            echo '<p><strong>Email :</strong> '.$_POST['email'].'</p>';
            echo '<p><strong>Statut :</strong> '.$_POST['statut'].'</p>';
            echo '<p><strong>Réponses :</strong> Q1 : '.$_POST['q1'].' | Q2 : '.$_POST['q2'].' | Q3 : '.$_POST['principe'].'</p>';
        }
    ?>
    <?php include("basededonnee");?>
    <?php include("footer.php");?>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>