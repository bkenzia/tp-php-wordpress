<?php
    class Utilisateur {
        private $user_name;
        private $user_pass;
        
 /**
 * Constructor
 */       
        public function __construct( $name, $pass ){
            $this->setUserName($name);
            $this->setUserPass($pass);
        }
        
/**
 * Setter
 */
public function setUserName($name){
    $this->user_name=$name;
}

public function setUserPass($pass){
    $this->user_pass=$pass;
}


/**
 * Getter
 */
        public function getUserName(){
            return $this->user_name;
        }
        public function getUserPass(){
            return $this->user_pass;
        }
        

        
    }
?>