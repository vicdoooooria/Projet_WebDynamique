<?php

            if(isset($_POST['nom'])){
                echo '<p><strong>Votre formulaire de permanence est : </strong>'.$_POST['nom'].' Merci !</p>';
            }
            else{
                echo '<p><strong>Votre formulaire de permanence est vide !</p>';
            }
?>