<?php

    class Admin extends Utilisateur {

        public function editUserPassword($user,$new_password){
            $user->setUserPass($new_password);
        }
    }
?>