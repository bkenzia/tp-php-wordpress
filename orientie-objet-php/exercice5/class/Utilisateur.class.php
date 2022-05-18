<?php
    class Utilisateur {
        protected $user_name;
        protected $user_pass;
        
        
        public function __construct( $name, $pass ){
            $this->setUserName($name);
            $this->setUserPass($pass);
        }


        public function getUserName(){
            return $this->user_name;
        }
        public function getUserPass(){
            return $this->user_pass;
        }
        
        public function setUserName($name){
            $this->user_name=$name;
        }

        public function setUserPass($pass){
            $this->user_pass=$pass;
        }

        
    }
?>