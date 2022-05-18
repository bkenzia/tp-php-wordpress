<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creation produit</title>
</head>
<body>



<form action="" method="POST">
        <input type="text" name="nom" placeholder="nom de produit">
        <input type="number" name="prix" placeholder="prix">
        <input type="submit" value="envoyer">
    </form>
    <?php
            require "class/produit.class.php";
            ?>
    

    <?php
    if(isset($_POST['nom']) && isset($_POST['prix'])){?>
       
        <?php //$produit1=new Produit($_POST['nom'],intval ($_POST['prix']));
           
        ?>
        <p>mon nom est <?= $produit1->getLibellee()?> </p>
   <?php }else{
        echo"veuillez remplir les champs vide";
    }
    
    ?>

    
</body>
</html>