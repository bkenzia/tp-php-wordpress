<?php
/** CONTROLEUR DES DONNEES DES ARTICLES **/

// Chargement des modèles
require 'modele/desserts.php';

/**
 * Récupération des articles
 */
function controleurDesserts($order) {

    // Récupération des données du modèle
    $desserts = desserts($order);

    return $desserts;
}