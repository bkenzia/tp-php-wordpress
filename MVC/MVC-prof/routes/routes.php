<?php
/** FICHIER DES ROUTES DU PROJET **/

// Chargement des controleurs
require 'controleur/articles.php';

function routes() {

    // Récupération de l'url de la page
    // $explode_url = explode('/', $_SERVER['REQUEST_URI']);
    // $url = $explode_url[count($explode_url) - 1];
    $url = explode('/', $_SERVER['REQUEST_URI'])[2];

    // Conditions des routes
    if($url == "inscription") {

        // Affichage de la vue inscription
        require 'vue/inscription.php';
    }
    if($url == "article") {

        // Récupération des données d'un article par son identifiant
        $articleParId = controleurArticlesParId($_GET['id']);

        // Affichage de la vue article
        require 'vue/article.php';
    }
    else {
        
        // Récupération des données des controleurs
        $articles = controleurArticles("DESC");
        // Récupération des articles récents (avec paramètres de requêtes)
        $articlesRecents = controleurArticlesRecents("DESC", 3);

        // Affichage de la vue accueil
        require 'vue/accueil.php';
    }
}