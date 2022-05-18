<?php
    class Produit{
        
        private $libellée;
        private $prix;
        
        public function __construct($libellée_prodect, $prix_produit){
            $this->setLibellée($libellée_prodect);
            $this->setPrix($prix_produit);
        }

        

        public function setLibellée($libellée_prodect){
            $this->libellée=$libellée_prodect;
        }
        public function setPrix($prix_produit){
            $this->prix=$prix_produit;
        }
        
        
        

        public function getLibellée(){
            return $this->libellée;
        }

        public function getPrix(){
           return $this->prix;
        }

        
    }

?>    