<?php
    class Utilisateur {
        private $user_name;
        private $user_pass;
        private $Age;

        public function getUserName(){
            return $this->user_name;
        }
        public function getUserPass(){
            return $this->user_pass;
        }
        public function getUserAge(){
            
            return $this->Age;
        }
        public function setUserName($name){
            $this->user_name=$name;
        }

        public function setUserPass($pass){
            $this->user_pass=$pass;
        }

        public function setUserAge($age){
            if($age< 0){
                $this->Age=0;
            }else{

                $this->Age=$age;
            }
        }
    }
?>