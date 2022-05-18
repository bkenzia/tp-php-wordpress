<?php
function connexionBdd() {
    
    // Informations de connexion
    $adresse_bdd = "localhost:3306";
    $utilisateur_bdd = "root";
    $mdp_bdd = "root";
    $bdd = "projet-blog";

    try{

        // Connexion à la bdd
        $connexion = new PDO("mysql:host=" . $adresse_bdd. ";dbname=" . $bdd . ";charset=utf8", $utilisateur_bdd, $mdp_bdd);
    }
    catch(PDOException $e) {

        // Affichage du message d'erreur
        echo "Erreur : " . $e->getMessage() . "<br>";
    }

    return $connexion;
}
