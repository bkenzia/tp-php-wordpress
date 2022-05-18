<?php
$severname='localhost';
$username='root';
$password='root';
$dbname='boutique';


try{
    $connexion = new PDO("mysql:host=$severname;dbname=$dbname;port=3306", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'la connexion est réussie';
}
catch(PDOException $e){
    echo"Erreur : " .$e->getMessage();
}