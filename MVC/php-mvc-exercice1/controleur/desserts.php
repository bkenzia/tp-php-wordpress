<?php
require 'modele/desserts.php';

/**
 * Controleur des deesserts
 */
function controleurDesserts() {

    // Récupération des desserts
    $desserts = desserts();

    return $desserts;
}