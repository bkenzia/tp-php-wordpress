<?php
/**
 * Controle des formulaires
 */
function controle_formulaire($post, $nom_formulaire) {

    // Données du formulaire
    $form = [
        "champs" => [],
        "message_succes" => "",
        "message_erreur" => "",
        "valide" => true
    ];

    // Pour chaque champs du formulaire
    foreach($post as $nom => $valeur) {
        // On exclu le bouton de soumission du controle
        if($nom !== $nom_formulaire) {
            // Si le champ est vide
            if(empty($post[$nom])) {

                // On ajoute le message d'erreur pour ce champ
                $form['message_erreur'] .= "Le champ " . $nom . " est vide<br>";

                // On désactive la validation du formulaire
                $form['valide'] = false;
            }
            else {
                
                // On stocke les informations du champ
                $form['champs'][$nom] = [
                    'valeur' => $valeur
                ];
            }
        }
    }

    return $form;
}