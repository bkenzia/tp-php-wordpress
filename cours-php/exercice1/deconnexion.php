<?php
if(isset($_POST['deconnexion'])) {

unset($_COOKIE['utilisateur_email']);
setcookie('utilisateur_email', '', time() -3600);//cree cookie utilisateur_email dans le passé pour le suprimer sur le navigateur
unset($_COOKIE['utilisateur_role']);//suprimer le cookie de la page
setcookie('utilisateur_role', '', time() -3600);//cree cookie utilisateur_role dans le passé pour le suprimer sur le navigateur
}