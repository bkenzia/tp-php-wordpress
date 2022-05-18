<?php
require_once('config/bdd.php');

/**
 * Modèle des articles
 */
class modeleArticles {

    /**
     * Construction de la class controleurArticles
     */
    function __construct() {
        $this->bdd = new BDD();
    }

    /**
     * Récupération des articles
     */
    function articles() {
        // Requête SQL des articles
        $articles = $this->bdd->connexion()->query("SELECT * FROM articles ORDER BY id DESC");

        return $articles;
    }

    /**
     * Récupération d'article par id
     */
    function articleParId($id) {
        // Requête SQL des articles
        $articles = $this->bdd->connexion()->query("SELECT * FROM articles WHERE id = $id");

        return $articles;
    }

    /**
     * Publication d'un article
     */
    function publierArticle($post, $nomImage) {
        // Requête SQL des articles
        $articles = $this->bdd->connexion()->query("INSERT INTO articles (titre, contenu, image, date) VALUES ('$titre','$contenu','$image','$date')");

        return $articles;
    }
}