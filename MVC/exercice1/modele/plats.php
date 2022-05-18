<?php

require_once('config/mysql-config.php');

function plats($order) {

    // Connexion
    $connexion = connexionBdd($order);
    // Exécution de la requête
    $plats = $connexion->query("SELECT * FROM plats ORDER BY id " . $order . "");

    return $plats;
}