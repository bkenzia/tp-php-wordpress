<?php

require 'controleur/article.php';

class routeur {

    function __construct() {
        $this->controleurAnnonces = new controleurAnnonces();
        $this->urlsAutorisees = [
            "",
            "accueil",
            "entrees",
            "plats",
            "desserts",
            "contact",
            
        ];
    }

    private function routes() {

        // Récupération de l'url de la page
        $url = explode('/', $_SERVER['REQUEST_URI'])[2];
        $root="/MVC/annonce-php-class/";
       
       
        

        // Si l'url est autorisée
        if(in_array($url, $this->urlsAutorisees)) {

            
            if($url == "accueil") {
                
                require 'vue/accueil.php';
               
            }
            else if($url == "entrees") {
                $icon="restaurant";
                $entrees=$this->controleurAnnonces->modeleAnnonces->articles('entree');
                require 'vue/lacarte.php';
            }
            else if($url == "plats") {
                $icon="restaurant_menu";
                $entrees=$this->controleurAnnonces->modeleAnnonces->articles('plats');
                
                
                require 'vue/lacarte.php';
            }
            else if($url == "desserts") {
                $icon="cake";
                $entrees=$this->controleurAnnonces->modeleAnnonces->articles('desserts');
                
                require 'vue/lacarte.php';
            }
            else if($url == "contact") {
                

               $form= $this->controleurAnnonces->controleurContact($_POST, 'contact');
                    
                
                
                require 'vue/contact.php';
            }
            else {
                
                
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