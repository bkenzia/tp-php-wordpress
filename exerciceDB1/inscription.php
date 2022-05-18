<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">
        <input type="text" name="nom" placeholder="nom">
        <input type="password" name="pass"  placeholder="mot de passe">
        <input type="submit" value="envoyer">
    </form>


    <?php
        require "./class/utilisateur.class.php";
        require_once 'class'.DIRECTORY_SEPARATOR.'DbConn.php';
        // $connexion = new DbConn("mysql:host=localhost;dbname=testDbpoo","root","root");
        $connexion = new DbConn("mysql:host=localhost","root","root");
        $connexion->dbInit();
        $connexion->dbCreate("testDbPoo");
        $connexion->createTableUtilisateur();
            
    ?>
    
    <?php 
        //verification des nom et pass
        if(isset($_POST["nom"]) && isset($_POST["pass"]))
    {
        
       $utilisateur=new Utilisateur($_POST["nom"],$_POST["pass"] );
       var_dump($utilisateur);
       $connexion->ajouterUtilisateur($utilisateur);
            
   }else{
        echo "veuillez remplir les champs vides";
    }?>
    <?php
      var_dump($connexion-> selectAllUsers()) ;
    ?>

    
   
</body>
</html>