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
            
    ?>
    
    <?php 
        if(isset ($_POST["nom"]) && isset($_POST["pass"])){?>
            <?php  $utilisateur1=new Utilisateur($_POST['nom'], $_POST['pass'])?>
            <p>mon nom est <?= $utilisateur1->getUserName()?> </p>
   <?php }else{
       echo "veuillez remplir les champs vides";
    }?>


    
   
</body>
</html>