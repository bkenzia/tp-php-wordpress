<?php
    class Produit{
        private $identifiant;
        private $libellée;
        private $prix;
        private $poids;


        public function setIdentifiant($id){
            $this->identifiant=$id;
        }

        public function setLibellée($libellée_prodect){
            $this->libellée=$libellée_prodect;
        }
        public function setPrix($prix_produit){
            $this->prix=$prix_produit;
        }
        public function setPoids($poids_produit){
            $this->poids=$poids_produit;
        }
        
        public function getIdentifiant(){
            return $this->identifiant;
        }

        public function getLibellée(){
            return $this->libellée;
        }

        public function getPrix(){
           return $this->prix;
        }

        public function getPoids(){
            return $this->poids;
        }
    }

?>    