<?php
/** CONTROLEUR DES DONNEES DES ARTICLES **/

// Chargement des modèles
require 'modele/articles.php';

/**
 * Récupération des articles
 */
function controleurArticles($order) {

    // Récupération des données du modèle
    $articles = articles($order);

    return $articles;
}

/**
 * Récupération des articles récents
 */
function controleurArticlesRecents($order, $limit) {

    // Récupération des données du modèle
    $articlesRecents = articlesRecents($order, $limit);

    return $articlesRecents;
}

function controleurArticlesParId($id) {

    // Récupération des données du modèle
    $article = articlesParId($id);

    return $article;
}