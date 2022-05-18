<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
        require_once 'class'.DIRECTORY_SEPARATOR.'utilisateur.class.php';
        require_once 'class'.DIRECTORY_SEPARATOR.'admin.class.php';
        require_once 'class'.DIRECTORY_SEPARATOR.'client.class.php';
        require_once 'class'.DIRECTORY_SEPARATOR.'produit.class.php';
        require_once 'class'.DIRECTORY_SEPARATOR.'DbConn.php';

       $connexion = new DbConn("mysql:host=localhost","root","root");
       $connexion->dbInit();
       $connexion->dbCreate("testDbPoo");
       $connexion->createTableUtilisateur();
       /*


       */
    //    $connexion->closeConnexion();

    ?>


    
   
</body>
</html>