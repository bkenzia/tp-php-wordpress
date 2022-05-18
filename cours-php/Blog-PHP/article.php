<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php include_once('header.php') ?>
        <main>
            
            <ul>
                <?php
                    $getId=$_GET['id'];
                    $requete_articles = "SELECT * FROM articles where id=$getId";

                    $articles = $connexion->query($requete_articles);
                ?>
                <?php while($article = $articles->fetch_assoc()) { ?>
                    <li> <h2> <?= $article['titre']?> </h2>
                   
                    <li><p  ><?= $article['contenu']?></p> </li>
                <?php }?>
 
            </ul>
            
            
        </main>
        <?php include_once('footer.php') ?>
    </body>
</html>