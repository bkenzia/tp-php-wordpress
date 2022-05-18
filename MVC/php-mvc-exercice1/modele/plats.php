<?php
require_once('config/bdd.php');

/**
 * Récupération des plats
 */
function plats() {

    // Connexion
    $connexion = connexionBdd();

    // Récupération des plats
    $plats = $connexion->query("SELECT * FROM plats ORDER BY id DESC");
    
    return $plats;
}