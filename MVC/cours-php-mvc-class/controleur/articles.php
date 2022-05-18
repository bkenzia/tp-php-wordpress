<?php
require 'modele/articles.php';

/**
 * Controleur des articles
 */
class controleurArticles {

    /**
     * Construction de la class controleurArticles
     */
    function __construct() {
        $this->modeleArticles = new modeleArticles();
    }

    /**
     * Récupération des articles
     */
    function articles() {

        // Récupération des articles
        $articles = $this->modeleArticles->articles();

        return $articles;
    }

    /**
     * Récupération d'article par id
     */
    function articleParId($id) {

        // Récupération des articles
        $articles = $this->modeleArticles->articleParId($id);

        return $articles;
    }

    /**
     * Publication d'article
     */
    function publierArticle($post, $files) {

        if(isset($post['publier-article'])) {

            $this->modeleArticles->publierArticle($post, $files['image']['name']);
        }
    }
}