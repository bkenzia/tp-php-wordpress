<?php
class Client extends Utilisateur{
    protected  $produits=array();
    public static $nbClient=0;
    public function __construct($name, $pass){
        parent::__construct($name, $pass);
        self::$nbClient++;

    }


    public function acheterProduit($produit){
        
        array_push($this->produits, $produit);
        
    }
    public function getProduit(){
        foreach($this->produits as $value){
            echo  $value->getLibellée() . " " .$value->getPrix()."<br>";
        }
    }

    public function getFacture(){
        $coups=0;
        foreach($this->produits as $value){
           $coups += $value->getPrix();
        }
        return $coups;
    }
}