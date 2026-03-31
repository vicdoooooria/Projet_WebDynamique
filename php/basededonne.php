<?php
$servername = "localhost";
$username   = "root";
$password   = "root"; 
$dbname     = "Mybdd";

// 1. Connexion au serveur MySQL
$conn = new mysqli($servername, $username, $password, "", 3307);
//print_r($conn);
if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}

// 2. Création de la base de données
$sql_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_db) === TRUE) {
    echo "<p>Base de données personnelle prête !</p><br>";
}

// 3. Sélection de la base pour la suite
$conn->select_db($dbname);

if(isset($_POST['reset'])){
    $conn->query("TRUNCATE TABLE informations_personnelles");
    echo "<div class='alert danger'>Base de données réinitialisée.</div>";
}

// 4. Création de la table "etudiants"
$sql_table = "CREATE TABLE IF NOT EXISTS informations_personnelles (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    date_naissance DATE,
    statut VARCHAR(50) NOT NULL,
    message_perso TEXT
)";

if ($conn->query($sql_table) === TRUE) {
    echo "<p>Table 'Informations Personnelles' prête !</p><br>";
}

// 5. Remplissage (Insertion de données de test)
// On vérifie d'abord si la table est vide pour ne pas ajouter les mêmes lignes à chaque actualisation
if(isset($_POST['nom']) && isset($_POST['prenom'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $statut = $_POST['statut'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    
    $check = $conn->prepare("SELECT id FROM informations_personnelles WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if($check->num_rows > 0){
        // L'utilisateur existe → on ajoute juste un message
        $stmt = $conn->prepare("INSERT INTO informations_personnelles(nom, prenom, email, date_naissance, statut) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nom, $prenom, $email, $date, $statut);
        $stmt->execute();
        echo "<div class='alert success'>Message ajouté à l'utilisateur existant.</div>";

    } else {
        $stmt = $conn->prepare("INSERT INTO  informations_personnelles(nom, prenom, email, date_naissance, statut) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nom, $prenom, $email, $date, $statut);
        $stmt->execute();
        echo "<div class='alert info'>Nouvel utilisateur ajouté avec succès.</div>";
    }
$stmt->close();
$check->close();
}
// 6. Affichage dans le navigateur sous forme de tableau HTML
$sql_select = "SELECT * FROM informations_personnelles";
$result = $conn->query($sql_select);
 //print_r($result);
echo "<h2>Liste des Informations</h2>";

if ($result->num_rows > 0) {
    echo "<table class='styled-table'>";
    echo "<tr style='background-color: #436d956f;'>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Date</th>
            <th>Statut</th>
            <th>Message</th>
          </tr>";

    // On parcourt chaque ligne de résultat
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["prenom"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["date_naissance"] . "</td>";
        echo "<td>" . $row["statut"] . "</td>";
        echo "<td>" . $row["message_perso"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "La table est vide.";
}
if(isset($_POST['afficher'])){

    $sql = "SELECT * FROM informations_personnelles";
    $result = $conn->query($sql);

    echo "<h3>Messages enregistrés</h3>";
    echo "<table class='result-table'>";
    echo "<tr><th>Nom</th><th>Email</th><th>Message</th></tr>";

    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['nom']." ".$row['prenom']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['message_perso']."</td>";
        echo "</tr>";
    }

    echo "</table>";
}
if(isset($_POST['chercher'])){

    $search = $_POST['search_email'];

    $stmt = $conn->prepare("SELECT * FROM informations_personnelles WHERE email = ?");
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<h3>Résultat recherche</h3>";
    echo "<table class='result-table'>";
    echo "<tr><th>Nom</th><th>Email</th><th>Message</th></tr>";

    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['nom']." ".$row['prenom']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['message_perso']."</td>";
        echo "</tr>";
    }

    echo "</table>";

    $stmt->close();
}

// 7. Fermeture de la connexion
$conn->close();
?>