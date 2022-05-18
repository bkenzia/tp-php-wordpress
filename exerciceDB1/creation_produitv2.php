

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Cours POO</title>
</head>
<?php
  require "class/produit.class.php";
?>

<body>
  <div >
<form action="" method="POST">
        <input type="text" name="nom" placeholder="nom de produit">
        <br>
        <input type="number" name="prix" placeholder="prix">
        <br>
        <input type="text" name="src_img" placeholder="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample85.jpg">
        <input type="submit" value="envoyer">
    </form>
    <br>
</div>



<?php
    if(isset($_POST['nom']) && isset($_POST['prix'])){?>
       
        <?php $produit1=new Produit($_POST['nom'],intval ($_POST['prix']),$_POST['src_img']);
           
        ?>
<figure class="snip1249">
      <div class="image">
        <img src=<?= $produit1->getPImgLink()?> alt="sample90" /><i class="ion-ios-basketball-outline"></i>
      </div>
      <figcaption>
        <h3> <?= $produit1->getLibellee()?> </h3>
        <p></p>
        <div class="price">
        <?= $produit1->getPrix()?>  €
        </div>
        <a href="#" class="add-to-cart">Add to Cart</a>
      </figcaption>
    </figure>




        <p>mon nom est <?= $produit1->getLibellee()?> </p>
   <?php }else{
        echo"veuillez remplir les champs vide";
    }
    
    ?>



    <br>
    <br>
    

</body>

</html>