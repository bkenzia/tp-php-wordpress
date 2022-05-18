<?php
var_dump('2. Routes : routes.php ->');

require 'controleur/articles.php';

/**
 * Routes
 */
function routes() {

    $urlsAutorisees = [
        "article",
        "accueil",
        "contact",
        "en-savoir-plus",
        "publier-article",
        ""
    ];

    // Récupération de l'url
    // Ex: /cours-php-mvc/accueil --------> accueil
    $url = explode('/', $_SERVER['REQUEST_URI'])[2];

    // Si l'url est dans le tableau des urls autorisées
    if(in_array($url, $urlsAutorisees)) {

        if($url == 'article') {

            $articleParId = controleurArticleParId($_GET['id']);

            require 'vue/article.php';
        }
        elseif($url == 'publier-article') {

            controleurPublierArticle($_POST, $_FILES);

            require 'vue/publier-article.php';
        }
        elseif($url == 'accueil') {

            $articles = controleurArticles();

            require 'vue/accueil.php';
        }
        else {

            $articles = controleurArticles();

            require 'vue/accueil.php';
        }
    }
    else {

        require 'vue/404.php';
    }
}