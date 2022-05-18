<?php
    class Carre extends Rectangle{
        

        public function __construct($largeur,  Point2D $centre){
            parent::__construct($largeur, $largeur, $centre);
                
        }

        function __toString(){
            return "<pre>{Carrée :".$this->id.
            "<br>          Centre:".$this->centre->_toString().
            "<br>          Largeur:".$this->getLargeur() .
            "<br>          Longueur:".$this->getLongueur().
            "<br>          surface:".$this->surface().
            "<br>          perimetre:".$this->perimetre().
            "<br>}</pre>";
        }
    } 