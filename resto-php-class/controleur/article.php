<?php
require 'modele/article.php';

/**
 * Controleur des articles
 */
class controleurAnnonces {

    /**
     * Construction de la class controleurArticles
     */
    function __construct() {
        $this->modeleAnnonces = new modeleAnnonces();
    }

    /**
     * Récupération des articles
     */
    function articles($table) {

        // Récupération des articles
        $artcles = $this->modeleAnnonces->articles($table);
        
        return $articles;
    }

    function contact($post) {
        $this->modeleAnnonces->contact($post);
    }
    
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

    function controleurContact($post, $nom_formulaire) {

        // Si le formulaire est bien soumis
        if(isset($post[$nom_formulaire])) {
    
            // Contrôle du formulaire
            $form = $this->controle_formulaire($post, $nom_formulaire);
    
            // Si le formulaire est valide
            if($form['valide'] == true) {
    
                // On enregistre le contact
                $form['message_succes'] = $this->modeleAnnonces->contact2($post, $nom_formulaire);
            }
        }
    
        return $form;
    }
}