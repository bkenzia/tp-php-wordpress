<?php
/**
 * Connexion à la base de données
 */
function connexionBdd() {
    // Informations de connexion
    $adresseBdd = "localhost:3306";
    $utilisateurBdd = "root";
    $mdpBdd = "root";
    $bdd = "resto-php-mvc";

    try {
        // Connexion
        $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $bdd . ";charset=utf8", $utilisateurBdd, $mdpBdd);
    }
    catch(PDOException $e) {

        // Affichage du message d'erreur
        echo "Erreur : " . $e->getMessage() . "<br>";
    }

    return $connexion;
}