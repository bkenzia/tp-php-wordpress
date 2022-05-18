<?php
require 'controleur/entrees.php';
require 'controleur/plats.php';
require 'controleur/desserts.php';
require 'controleur/contact.php';
require 'controleur/reservation.php';

function routes() {

    // Récupération de l'url de la page (ex: /domaine/page -> page)
    $url = explode('/', $_SERVER['REQUEST_URI'])[2];

    // Routes
    if($url == "entrees") {

        // Récupération des entrées
        $entrees = controleurEntrees();

        require 'vue/entrees.php';
    }
    else if($url == "plats") {

        // Récupération des plats
        $plats = controleurPlats();

        require 'vue/plats.php';
    }
    else if($url == "desserts") {

        // Récupération des desserts
        $desserts = controleurDesserts();

        require 'vue/desserts.php';
    }
    else if($url == "carte") {

        // Récupération des entrées
        $entrees = controleurEntrees();
        // Récupération des plats
        $plats = controleurPlats();
        // Récupération des desserts
        $desserts = controleurDesserts();

        require 'vue/carte.php';
    }
    else if($url == "contact") {

        $form = controleurContact($_POST, 'contact');

        require 'vue/contact.php';
    }
    else if($url == "reservation") {

        $form = controleurReservation($_POST, 'reservation');

        require 'vue/reservation.php';
    }
    else if($url == "accueil") {

        require 'vue/accueil.php';
    }
    else {

        require 'vue/accueil.php';
    }
}