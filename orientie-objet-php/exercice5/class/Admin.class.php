<?php
class Admin extends Utilisateur{
    protected static $ban=array();
    public static $nbClient=0;


    public function eiditPassword($utilisateur, $newPassword){
        
        $utilisateur->setUserPass($newPassword);
        return $utilisateur;
    }
    //surcharge de la methode getUserName 
    // retourne le nom en majuscule
    public function getUserName(){
       return strtoupper($this-> user_name);
    }
    public function setBan($b){
        
        array_push(self::$ban,$b);
        self::$nbClient++;

    }
    //parcours de tous les elements du tableau $ban
    // et formattage de l'affichage 
    public function getBan(){
        foreach(self::$ban as $value){
            echo  $value->getUserName() . " " .$value->getUserPass()."<br>";
        }
    }
    // suppression d'un utilisateur via son nom 
    public function suprimer($nom){
        
        unset(self::$ban[array_search($nom,self::$ban)]);
    }
    
}