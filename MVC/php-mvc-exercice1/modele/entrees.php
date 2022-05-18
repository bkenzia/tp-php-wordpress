<?php
require_once('config/bdd.php');

/**
 * Récupération des entrées
 */
function entrees() {

    // Connexion
    $connexion = connexionBdd();

    // Récupération des entrées
    $entrees = $connexion->query("SELECT * FROM entrees ORDER BY id DESC");
    
    return $entrees;
}