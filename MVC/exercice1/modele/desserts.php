<?php

require_once('config/mysql-config.php');

function desserts($order) {

    // Connexion
    $connexion = connexionBdd($order);
    // Exécution de la requête
    $desserts = $connexion->query("SELECT * FROM desserts ORDER BY id " . $order . "");

    return $desserts;
}
