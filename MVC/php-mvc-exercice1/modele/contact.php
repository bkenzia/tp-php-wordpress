<?php
require_once('config/bdd.php');

function contact($post, $nom_formulaire) {

    // Liste des noms des champs
    $noms_champs = "";
    // Liste des valeurs des champs
    $valeur_champs = "";

    $i = 0;

    // Récupération des valeurs champs
    foreach($post as $nom => $valeur) {
        $i++;

        if($nom !== $nom_formulaire) {
            // Création de la liste des champs
            $noms_champs .= ($i == count($post) -1) ? $nom : $nom . ", ";
            // Création de la liste des valeurs des champs
            $valeur_champs .= ($i == count($post) -1) ? "'" . $valeur . "'" : "'" . $valeur . "', ";
        }
    }

    $connexion = connexionBdd();

    $reservation = $connexion->query("INSERT INTO " . $nom_formulaire . " (" . $noms_champs . ") VALUES (" . $valeur_champs . ")");

    return "Le contact a bien été ajouté";
}