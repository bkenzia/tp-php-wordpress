<?php
    class Produit{
        
        private $libellée;
        private $prix;
        private $image_link;
        
        public function __construct($libellée_prodect, $prix_produit, $image_src){
            $this->setLibellée($libellée_prodect);
            $this->setPrix($prix_produit);
            $this->image_link=$image_src;
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
        public function getImageLink(){
            return $this->image_link;
        }

        public function getPrix(){
           return $this->prix;
        }

        
    }

?>    