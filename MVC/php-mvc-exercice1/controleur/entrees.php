<?php
require 'modele/entrees.php';

/**
 * Controleur des entrées
 */
function controleurEntrees() {

     // Récupération des entrées
    $entrees = entrees();

    return $entrees;
}