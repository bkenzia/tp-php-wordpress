<?php
require_once('config/bdd.php');

/**
 * Récupération des desserts
 */
function desserts() {

    // Connexion
    $connexion = connexionBdd();

    // Récupération des desserts
    $desserts = $connexion->query("SELECT * FROM desserts ORDER BY id DESC");
    
    return $desserts;
}