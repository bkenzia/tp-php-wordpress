<?php
    class Cercle extends Form{
        private $rayon;
        protected $centre;
        public function __construct($rayon, Point2D $centre){
            parent::__construct();
            $this->setRayon($rayon);
            $this->centre=$centre;

            
        }

        public function setRayon($rayon){
            $this->rayon=$rayon;
        }
        public function getRayon(){
           return $this->rayon;
        }

        public function surface(){
            return pow($this->rayon,2)*pi();
        }

        public function perimetre(){
            return $this->rayon*2*pi();
        }

        function __toString(){
            return "<pre>{Cercle :".$this->id.
            "<br>          Centre:".$this->centre->_toString().
            "<br>          Rayon:".$this->rayon .
            
            "<br>          surface:".$this->surface().
            "<br>          perimetre:".$this->perimetre().
            "<br>}</pre>";
        }
    }