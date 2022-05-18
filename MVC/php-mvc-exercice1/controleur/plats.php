<?php
require 'modele/plats.php';

/**
 * Controleur des plats
 */
function controleurPlats() {

    // Récupération des plats
    $plats = plats();

    return $plats;
}