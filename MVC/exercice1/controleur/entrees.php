<?php
/** CONTROLEUR DES DONNEES DES ARTICLES **/

// Chargement des modèles
require 'modele/entrees.php';

/**
 * Récupération des articles
 */
function controleurEntrees($order) {

    // Récupération des données du modèle
    $entrees = entrees($order);

    return $entrees;
}