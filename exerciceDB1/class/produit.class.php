<?php
    class Produit{
        
        private $libellee;
        private $prix;
        private $poids;
        private $img_link;
        public static $cpt=0;
           
 /**
 * Constructor
 */            
     
        public function __construct($libelle_produit, $prix_produit,$img_link){
            $this->setLibellee($libelle_produit);
            $this->setPrix($prix_produit);
            $this->img_link=$img_link;
            self::$cpt++;
        }
/**
 * Setter
 */
        public function setLibellee($libelle_produit){
            $this->libellee=$libelle_produit;
        }
        public function setPrix($prix_produit){
            $this->prix=$prix_produit;
        }
        public function setPoids($poids){
            $this->poids=$poids;
        }
             
        
/**
 * Getter
 */
        public function getLibellee(){
            return $this->libellee;
        }

        public function getPrix(){
           return $this->prix;
        }
        public function getPImgLink(){
            return $this->img_link;
         }
        
    }

?>    