<?php
    class Rectangle extends Form{
        private $largeur;
        private $longueur;

        public function __construct($largeur, $longueur, Point2D $centre){
            parent::__construct();
            $this->setLargeur($largeur);
            $this->setLongueur($longueur);
            $this->centre=$centre;


        }

        public function setLargeur($largeur){
            $this->largeur=$largeur;
        }

        public function setLongueur($longueur){
            $this->longueur=$longueur;
        }
        public function getLargeur(){
           return $this->largeur;
        }
        public function getLongueur(){
            return $this->longueur;
        }
        public function surface(){
           return $this->longueur * $this->largeur;
        }
        public function perimetre(){
            return ($this->longueur + $this->largeur)*2;
        }

        function __toString(){
            return "<pre>{Rectangle :".$this->id.
            "<br>          Centre:".$this->centre->_toString().
            "<br>          Largeur:".$this->largeur .
            "<br>          Longueur:".$this->longueur.
            "<br>          surface:".$this->surface().
            "<br>          perimetre:".$this->perimetre().
            "<br>}</pre>";
        }
    
    } 