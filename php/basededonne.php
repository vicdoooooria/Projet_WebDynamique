<?php
$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "Mybdd";

// 1. Connexion au serveur MySQL
$conn = new mysqli($servername, $username, $password, "", 3307);
if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}

// 2. Création de la base de données
$sql_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_db) === TRUE) {
    echo "<p>Base de données prête !</p>";
}

// 3. Sélection de la base
$conn->select_db($dbname);

/* // 4. Réinitialisation si demandée
if (isset($_POST['reset'])) {
    $conn->query("SET FOREIGN_KEY_CHECKS = 0");
    $conn->query("TRUNCATE TABLE reservations");
    $conn->query("TRUNCATE TABLE creneaux");
    $conn->query("TRUNCATE TABLE matieres");
    $conn->query("TRUNCATE TABLE utilisateurs");
    $conn->query("SET FOREIGN_KEY_CHECKS = 1");
    echo "<div class='alert danger'>Base de données réinitialisée.</div>";
}

// 5. Création des tables

// Table utilisateurs
$conn->query("CREATE TABLE IF NOT EXISTS utilisateurs (
    id_utilisateur INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom_utilisateur  VARCHAR(60)  NOT NULL,
    email_utilisateur VARCHAR(50) NOT NULL UNIQUE,
    motdepasse_utilisateur VARCHAR(255) NOT NULL,
    job VARCHAR(20) NOT NULL CHECK (job IN ('étudiant', 'professeur'))
)");

// Table matieres
$conn->query("CREATE TABLE IF NOT EXISTS matieres (
    id_mat INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom_mat VARCHAR(50) NOT NULL UNIQUE
)");

// Table creneaux
$conn->query("CREATE TABLE IF NOT EXISTS creneaux (
    id_creneau INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    date_creneau DATE NOT NULL,
    heure_creneau VARCHAR(20) NOT NULL,
    salle_creneau VARCHAR(20) NOT NULL
)");

// Table reservations (table centrale qui relie tout)
$conn->query("CREATE TABLE IF NOT EXISTS reservations (
    id_reservation INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT(6) UNSIGNED NOT NULL,
    id_mat         INT(6) UNSIGNED NOT NULL,
    id_creneau     INT(6) UNSIGNED NOT NULL,
    statut_reservation VARCHAR(20) NOT NULL DEFAULT 'en attente'
        CHECK (statut_reservation IN ('en attente', 'confirmée', 'à déclarer')),
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id_utilisateur),
    FOREIGN KEY (id_mat)         REFERENCES matieres(id_mat),
    FOREIGN KEY (id_creneau)     REFERENCES creneaux(id_creneau)
)");

// 6. Insertion d'une réservation depuis le formulaire
if (isset($_POST['nom']) && isset($_POST['email'])) {

    $nom      = trim($_POST['nom']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $job      = $_POST['role'];
    $matiere  = trim($_POST['matiere']);
    $date     = $_POST['date'];
    $heure    = $_POST['heure'];
    $salle    = $_POST['salle'];

    // utilisateur
    $stmt = $conn->prepare("SELECT id_utilisateur FROM utilisateurs WHERE email_utilisateur = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id_utilisateur);
    $stmt->fetch();
    $stmt->close();

    if (!$id_utilisateur) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO utilisateurs (nom_utilisateur, email_utilisateur, motdepasse_utilisateur, job)
                                VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nom, $email, $hash, $job);
        $stmt->execute();
        $id_utilisateur = $conn->insert_id;
        $stmt->close();
    }

    // matiere
    $stmt = $conn->prepare("SELECT id_mat FROM matieres WHERE nom_mat = ?");
    $stmt->bind_param("s", $matiere);
    $stmt->execute();
    $stmt->bind_result($id_mat);
    $stmt->fetch();
    $stmt->close();

    if (!$id_mat) {
        $stmt = $conn->prepare("INSERT INTO matieres (nom_mat) VALUES (?)");
        $stmt->bind_param("s", $matiere);
        $stmt->execute();
        $id_mat = $conn->insert_id;
        $stmt->close();
    }

    // créneau (on autorise plusieurs réservations sur le même créneau)
    $stmt = $conn->prepare("INSERT INTO creneaux (date_creneau, heure_creneau, salle_creneau) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $date, $heure, $salle);
    $stmt->execute();
    $id_creneau = $conn->insert_id;
    $stmt->close();

    // reservation
    $statut = 'en attente';
    $stmt = $conn->prepare("INSERT INTO reservations (id_utilisateur, id_mat, id_creneau, statut_reservation)
                            VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiis", $id_utilisateur, $id_mat, $id_creneau, $statut);
    $stmt->execute();
    $stmt->close();

    echo "<div class='alert success'>Réservation enregistrée avec succès !</div>";
}

// 7. Affichage de toutes les réservations
$sql = "SELECT
            r.id_reservation,
            u.nom_utilisateur,
            u.email_utilisateur,
            u.job,
            m.nom_mat,
            c.date_creneau,
            c.heure_creneau,
            c.salle_creneau,
            r.statut_reservation
        FROM reservations r
        JOIN utilisateurs u ON r.id_utilisateur = u.id_utilisateur
        JOIN matieres     m ON r.id_mat         = m.id_mat
        JOIN creneaux     c ON r.id_creneau     = c.id_creneau
        ORDER BY c.date_creneau DESC, c.heure_creneau";

$result = $conn->query($sql);

echo "<h2>Liste des Réservations</h2>";

if ($result && $result->num_rows > 0) {
    echo "<table class='styled-table'>
            <tr style='background-color:#436d956f;'>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Matière</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Salle</th>
                <th>Statut</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id_reservation']}</td>
                <td>{$row['nom_utilisateur']}</td>
                <td>{$row['email_utilisateur']}</td>
                <td>{$row['job']}</td>
                <td>{$row['nom_mat']}</td>
                <td>{$row['date_creneau']}</td>
                <td>{$row['heure_creneau']}</td>
                <td>{$row['salle_creneau']}</td>
                <td>{$row['statut_reservation']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Aucune réservation pour l'instant.</p>"; */