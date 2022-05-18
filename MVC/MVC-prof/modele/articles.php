<?php
/** MODELE DES DONNEES DES ARTICLES **/

// Chargement de la connexion à la BDD
require_once('config/mysql-config.php');

/**
 * Récupération des articles
 */
function articles($order) {

    // Connexion
    $connexion = connexionBdd();
    // Exécution de la requête
    $articles = $connexion->query("SELECT * FROM articles ORDER BY id " . $order . "");

    return $articles;
}

/**
 * Récupération des articles récents
 */
function articlesRecents($order, $limit) {

    // Connexion
    $connexion = connexionBdd();
    // Exécution de la requête
    $articles = $connexion->query("SELECT * FROM articles ORDER BY id " . $order . " LIMIT 0,$limit");

    return $articles;
}

/**
 * Récupération des articles récents
 */
function articlesParId($id) {

    // Connexion
    $connexion = connexionBdd();
    // Exécution de la requête
    $article = $connexion->query("SELECT * FROM articles WHERE id = $id");

    return $article;
}