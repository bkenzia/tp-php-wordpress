

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Cours POO</title>
</head>

<body>
  <form action="" method="POST">
    <input type="text" name="nom" placeholder="nom de produit">
    <input type="number" name="prix" placeholder="prix">
    <input type="text" name="image" placeholder="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample85.jpg">
    <div class="submit">

      <input type="submit" value="envoyer">
    </div>
  </form>
  <?php
    require "class/produit.class.php";
        
  ?>



  <?php if(isset($_POST['nom']) && isset($_POST['prix'])){?>
       
    <?php $produit1=new Produit($_POST['nom'],intval ($_POST['prix']),$_POST['image']);
           
    ?>

    <figure class="snip1249">
      <div class="image">
        <img src="<?=$produit1->getImageLink() ?>" alt="sample90" /><i class="ion-ios-basketball-outline"></i>
      </div>
      <figcaption>
        <h3><?= $produit1->getLibellée()?></h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem animi impedit.</p>
        <div class="price">
          <?= $produit1->getPrix()?> €
        </div>
        <a href="#" class="add-to-cart">Add to Cart</a>
      </figcaption>
    </figure>
    
  <?php }else{
      echo"veuillez remplir les champs vide";
    }
  ?>
  
    
</body>

</html>