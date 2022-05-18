<?php
require 'controleur/articles.php';

class routeur {

    function __construct() {
        $this->controleurArticles = new controleurArticles();
        $this->urlsAutorisees = [
            "",
            "accueil",
            "article",
            "publier-article",
            "500"
        ];
    }

    private function routes() {

        // Récupération de l'url de la page
        $url = explode('/', $_SERVER['REQUEST_URI'])[2];

        // Si l'url est autorisée
        if(in_array($url, $this->urlsAutorisees)) {

            if($url == "article") {

                $articleParId = $this->controleurArticles->articleParId($_GET['id']);

                require 'vue/article.php';
            }
            elseif($url == "publier-article") {

                $this->controleurArticles->publierArticle($_POST, $_FILES);

                require 'vue/publier-article.php';
            }
            elseif($url == "accueil") {

                $articles = $this->controleurArticles->articles();

                require 'vue/accueil.php';
            }
            elseif($url == "500") {

                require 'vue/500.php';
            }
            else {

                $articles = $this->controleurArticles->articles();

                require 'vue/accueil.php';
            }
        }
        else {

            require 'vue/404.php';
        }
    }

    function affichageVues() {

        $this->routes();
    }
}