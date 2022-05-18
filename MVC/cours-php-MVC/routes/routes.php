<?php
var_dump('2. Routes : routes.php ->');

require 'controleur/articles.php';

function routes() {

    // Récupération de l'url
    // Ex: /cours-php-mvc/accueil --------> accueil
    $url = explode('/', $_SERVER['REQUEST_URI'])[2];

    if($url == 'article') {

        $articleParId = controleurArticleParId($_GET['id']);

        require 'vue/article.php';
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