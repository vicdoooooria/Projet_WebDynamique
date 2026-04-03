<?php
session_start();

// Connexion à la BDD
$mysqli = mysqli_connect("localhost", "root", "root", "efrei_rdv", 3307);

if (!$mysqli) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupération et sécurisation des champs du formulaire
    $nom     = htmlentities($_POST['nom'],      ENT_QUOTES, "UTF-8");
    $password= htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");
    $role    = htmlentities($_POST['role'],     ENT_QUOTES, "UTF-8");
    $email   = htmlentities($_POST['email'],    ENT_QUOTES, "UTF-8");
    $classe  = htmlentities($_POST['classe'],   ENT_QUOTES, "UTF-8");
    $matiere = htmlentities($_POST['matiere'],  ENT_QUOTES, "UTF-8");
    $date    = htmlentities($_POST['date'],     ENT_QUOTES, "UTF-8");
    $heure   = htmlentities($_POST['heure'],    ENT_QUOTES, "UTF-8");
    $salle   = htmlentities($_POST['salle'],    ENT_QUOTES, "UTF-8");

    // Vérification que tous les champs sont remplis
    if (empty($nom) || empty($password) || empty($role) || empty($email) ||
        empty($classe) || empty($matiere) || empty($date) || empty($heure) || empty($salle)) {
        die("Tous les champs sont obligatoires.");
    }

    // Vérification que le créneau n'est pas déjà réservé (contrainte UNIQUE)
    $check = mysqli_query($mysqli,
        "SELECT id FROM reservations 
         WHERE salle = '".$salle."' 
         AND heure = '".$heure."' 
         AND date_rdv = '".$date."'"
    );

    if (mysqli_num_rows($check) > 0) {
        die("Ce créneau est déjà réservé dans cette salle. Veuillez choisir un autre horaire ou une autre salle.");
    }

    // Insertion en base de données
    $requete = mysqli_query($mysqli,
        "INSERT INTO reservations (nom, password, role, email, classe, matiere, date_rdv, heure, salle)
         VALUES (
            '".$nom."',
            '".$password."',
            '".$role."',
            '".$email."',
            '".$classe."',
            '".$matiere."',
            '".$date."',
            '".$heure."',
            '".$salle."'
         )"
    );

    if ($requete) {
        $_SESSION['nom']   = $nom;
        $_SESSION['role']  = $role;
        $_SESSION['email'] = $email;
        header("Location: confirmation.php"); // Redirige vers ta page de confirmation
        exit();
    } else {
        echo "Erreur lors de la réservation : " . mysqli_error($mysqli);
    }
}

mysqli_close($mysqli);
?>