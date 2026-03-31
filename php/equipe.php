<?php
    $professeurs = [
        ["nom" => "Professeur Dupont", "image" => "professeur.jpg"],
        ["nom" => "Professeur Martin", "image" => "professeur2.jpg"],
        ["nom" => "Professeur Bernard", "image" => "professeur3.jpg"],
        ["nom" => "Professeur Dubois", "image" => "professeur4.jpg"],
        ["nom" => "Professeur Thomas", "image" => "professeur5.jpg"],
    ];

    foreach ($professeurs as $professeur) {
        echo '<div class="gallery-slide">';
        echo '<img src="images/professeurs/' . $professeur["image"] . '" alt="' . $professeur["nom"] . '">';
        echo '<p>' . $professeur["nom"] . '</p>';
        echo '</div>';
    }
?>