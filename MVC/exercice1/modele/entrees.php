<?php

require_once('config/mysql-config.php');

function entrees($order) {

    // Connexion
    $connexion = connexionBdd($order);
    // Exécution de la requête
    $entrees = $connexion->query("SELECT * FROM entree ORDER BY id " . $order . "");

    return $entrees;
}
