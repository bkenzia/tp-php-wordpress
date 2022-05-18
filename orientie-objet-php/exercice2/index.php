<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orientie-objet-php</title>
</head>
<body>
        <?php 
            require "class/utilisateur.class.php";
            require "class/produit.class.php";
            $utilisateur = new Utilisateur();
            $produit1= new Produit();
            $test1=new Utilisateur();
            $test1 ->setUserName('test1');
            $test1->setUserPass("123");
            $test1->setUserAge('-12');
            // var_dump($test1);
            $produit1->setIdentifiant('12');
            $produit1->setLibellée("toto");
             $produit1->setPrix('12');
            $produit1->setPoids('120');
           
            
            // var_dump($produit);
        ?>
        <p>le nom de l'utilisateur est <?= $test1 ->getUserName(); ?></p>
        <p>son mot de passe est <?=$test1->getUserPass(); ?></p>
        <p>l'age de l'utilisateur <?= $test1 ->getUserName(); ?> est <?= $test1->getUserAge();?></p>


        <p>l'identifiant du produit est  <?= $produit1 ->getIdentifiant(); ?></p>
        <p>le libellée de produit1 est  <?=$produit1->getLibellée(); ?></p>
        <p>le prix de produit1 est  <?= $produit1->getPrix(); ?> </p>
</body>
</html>