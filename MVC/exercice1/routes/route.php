<?php
/** FICHIER DES ROUTES DU PROJET **/

// Chargement des controleurs
require 'controleur/accueil.php';
require 'controleur/entrees.php';
require 'controleur/desserts.php';
require 'controleur/plats.php';


function routes() {
    $url = explode('/', $_SERVER['REQUEST_URI'])[3];
    
        
    if($url == "entrees") {
       $entrees=  controleurEntrees("DESC");
        // Affichage de la vue inscription
        require 'vue/entrees.php';
        
    }else if($url == "desserts"){
        $desserts=  controleurDesserts("DESC");
        // Affichage de la vue inscription
        require 'vue/desserts.php';
    }else if($url == "plats"){
        $plats=  controleurPlats("DESC");
        // Affichage de la vue inscription
        require 'vue/plats.php';
    }else if($url == "contact"){
        // $plats=  controleurPlats("DESC");
        // Affichage de la vue inscription
        require 'vue/contact.php';
    }
    else {
        
        
        require 'vue/accueil.php';
    }
        
}


