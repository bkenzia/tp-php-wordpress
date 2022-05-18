<?php
    require_once 'classes/Compte.php';
    $compte1=new Compte;
    $compte1->titulaire='lili';
    $compte1->solde=123;
    var_dump($compte1);
    $compte2=new Compte;
    var_dump($compte2);