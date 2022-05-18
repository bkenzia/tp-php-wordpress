<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require "class/Dbconn.class.php";
        require "class/Utilisateur.class.php";
        $connexion=new Dbconn('mysql:host=localhost;dbname=test6', 'root', 'root');
        // var_dump($connexion);
        // $db1->dbCreate('test');
        // $connexion->dblnit();
        // $connexion->dbCreate('test6');
        // $connexion->drop('test');

        $pdo=$connexion->dblnit();
        var_dump($pdo);
       
        // var_dump($utilisateur);
        // echo  $connexion->closeConnection();
        // $connexion->createTableUtilisateur();
        // $connexion->createTableProduit();
        $connexion->ajouterUtilisateur('utilisateur2', 'abcd');
        
    ?>
</body>
</html>
