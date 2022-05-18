<?php 
    $bdd_adresse = "localhost:3306";
    $bdd_utilisateur = "root";
    $bdd_password = "root";
    $bdd = "resto";
    
    $connexion = new mysqli($bdd_adresse, $bdd_utilisateur, $bdd_password, $bdd);
    
    if($connexion->connect_error) {
        echo "Échec lors de la connexion à MySQL : (" . $connexion->connect_errno . ") " . $connexion->connect_error;
    }
?>