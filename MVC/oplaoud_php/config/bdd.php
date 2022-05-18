<?php
var_dump('5. Connexion BDD : bdd.php');

/**
 * Connexion à la base de données
 */
function connexionBDD() {

    // Informations de connexion
    $adresseBdd = "localhost:3306";
    $utilisateurBdd = "root";
    $mdpBdd = "root";
    $bdd = "cours-php-mvc";

    try {
        // Connexion
        // Ex: ("mysql:host=localhost;dbname=blog;charset=utf8", "root", "root")
        $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $bdd . ";charset=utf8", $utilisateurBdd, $mdpBdd);
    }
    catch(PDOException $erreur) {

        // Affichage du message d'erreur
        echo "Erreur : " . $erreur->getMessage();
    }

    return $connexion;
}