<?php
$servername = "localhost";
$username   = "root";
$password   = "root";
$port       = 3307;

$conn = new mysqli($servername, $username, $password, "", $port);
if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
} else {
    echo "<p>Connexion à MySQL réussie !</p>";
}
?>