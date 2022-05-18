<?php
require_once('config/bdd.php');

/**
 * Modèle des articles
 */
class modeleAnnonces {

    /**
     * Construction de la class controleurArticles
     */
    function __construct() {
        $this->bdd = new BDD();
    }

    /**
     * Récupération des articles
     */
    function articles($table) {
        // Requête SQL des annonces
        $articles = $this->bdd->connexion()->query("SELECT * FROM $table ORDER BY id DESC");
        
        return $articles;
    }

    /**
     * Récupération d'article par id
     */
    // function annoncesParId($id) {
    //     // Requête SQL des articles
    //     $annonces = $this->bdd->connexion()->query("SELECT * FROM annonces WHERE id = $id");

    //     return $annonces;
    // }

    /**
     * Publication d'un article
     */
    function contact($post) {

        // Requête SQL des articles
        $nom=$post['nom'];
        $prenom=$post['prenom'];
        $message=$post['message'];
        $email=$post['email'];
        
        $annonces = $this->bdd->connexion()->query("INSERT INTO contact (nom, prenom, email, message) VALUES ('$nom','$prenom','$email', '$message')");

        echo"le contact est ajoutée";
    }


    function contact2($post, $nom_formulaire) {

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
    
        $this->bdd->connexion()->query("INSERT INTO " . $nom_formulaire . " (" . $noms_champs . ") VALUES (" . $valeur_champs . ")");
    
        return "Le contact a bien été ajouté";
    }

    // function recherche($recherche){
    //     $rechercheResult = $this->bdd->connexion()->query("SELECT *  FROM annonces WHERE nom LIKE '%$recherche%' OR categories LIKE '%$recherche%' LIMIT 10");
        
    //     return $rechercheResult;
    // }
}