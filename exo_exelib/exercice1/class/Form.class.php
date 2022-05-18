<?php 
    abstract class Form{
        protected $id;
        protected $centre;
        private static $conteur;
        // abstract surface();
        // abstract perimetre();


        public function __construct(){
            self::$conteur++;
            $this->id=self::$conteur;
        }
    
        public function bouger($dx,$dy){
            if($this->centre instanceof Point2D){

                $this->centre->bouger($dx,$dy);
            }
        }
   
    }