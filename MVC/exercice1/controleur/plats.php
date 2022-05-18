<?php
/** CONTROLEUR DES DONNEES DES ARTICLES **/

// Chargement des modèles
require 'modele/plats.php';

/**
 * Récupération des articles
 */
function controleurPlats($order) {

    // Récupération des données du modèle
    $plats = plats($order);

    return $plats;
}