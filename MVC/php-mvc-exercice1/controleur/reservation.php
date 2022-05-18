<?php
require 'modele/reservation.php';
require_once('controleur/formulaires.php');

function controleurReservation($post, $nom_formulaire) {

    // Si le formulaire est bien soumis
    if(isset($post[$nom_formulaire])) {

        // Contrôle du formulaire
        $form = controle_formulaire($post, $nom_formulaire);

        // Si le formulaire est valide
        if($form['valide'] == true) {

            // On enregistre le contact
            $form['message_succes'] = reservation($post, $nom_formulaire);
        }
    }

    return $form;
}