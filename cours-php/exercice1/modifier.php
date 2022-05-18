<?php
include_once('deconnexion.php');

if(isset($_COOKIE['utilisateur_email']) && isset($_COOKIE['utilisateur_role'])) {

    if($_COOKIE['utilisateur_role'] == 'admin') {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/modifier.css">
    <title>Document</title>
</head>
<body>
    <?php include_once('./header.php') ?>
    <main>
        <section >
            <?php 
                 $entreeTable=$_GET['categorie'];
                 $id=$_GET['id'];
                  if(isset($_POST['enregistrer'])) {
                   
                    $nouveau_nom=$_POST['nom'];
                    $nouveau_ingrediants=$_POST['ingrediants'];
                    $nouveau_prix=$_POST['prix'];
                   
                    $requet_modifier = "UPDATE $entreeTable SET nom= '$nouveau_nom', ingrediants='$nouveau_ingrediants', prix='$nouveau_prix' WHERE id = $id";
                    
                   
                    if($connexion->query($requet_modifier)===true){
                        echo "l'element est modifier";
                    }

                }
                 
        ?>
        
           
            <?php 
               
                $requete_entrees = "SELECT * FROM $entreeTable where id=$id";
                $entrees = $connexion->query($requete_entrees);
                $entree = $entrees->fetch_assoc();
                ?>    
                
                
            
            <h2><?=$entree['nom']?></h2>
            <form class="form_modifier" action="" method="POST">
                <input type="text" name='nom' value="<?=$entree['nom']?>">
                <input type="text" name='ingrediants' value="<?=$entree['ingrediants']?>">
                <input type="number" name="prix" min='1' value="<?=$entree['prix']?>" >
                <div>

                    <input type="submit" value="enregistrer" name="enregistrer">
                </div>
            </form>
                     
            

            
            
            
        </section>
        
    </main>
    <?php include_once('./footer.php') ?>
</body>
</html>

<?php
    }
    else {
        
        header('Location: ./index.php');
        
    }
}
else {

    
    
    header('Location: ./index.php');
}
?>