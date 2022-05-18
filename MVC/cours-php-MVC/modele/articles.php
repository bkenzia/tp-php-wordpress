<?php
var_dump('4. Modèle : articles.php ->');

require_once('config/bdd.php');

/**
 * récupération des articles
 */
function articles() {
    // Connexion à la bdd
    $connexion = connexionBDD();
    // Requête SQL
    $articles = $connexion->query("SELECT * FROM articles ORDER BY id DESC");

    return $articles;
}

/**
 * récupération d'article par id
 */
function articleParId($id) {
    // Connexion à la bdd
    $connexion = connexionBDD();
    // Requête SQL
    $article = $connexion->query("SELECT * FROM articles WHERE id = $id");

    return $article;
}