
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
<link rel="stylesheet" href="./css/admin.css" >
<script src="./js/index.js" defer></script>
    <title>Document</title>
</head>
<body>
    <?php include_once('./header.php') ?>
    <main>
        <H2>salu je suis administrateur</H2>
        <section>

        <form action="" method="POST">
            <div>

                <span>catégorée : </span><select name="categorie" id="">
                    <option value="entree">Entrée</option>
                    <option value="Plats">Plat</option>
                    <option value="Desserts">Dessert</option>
                </select>
            </div>
            <div>

                <input type="text" name="nom" placehoLder='le nom'>
                <input type="text" name="ingridiants" placehoLder='ingridiants'>
            </div>
            <div>

                <input type="number" name='prix'min="2" placehoLder='prix' >
            </div>
            <div class="bnt">

                <input type="submit" name='ajouter' value="ajouter à la carte">
            </div>
        </form>
        
        <?php
        // Traitement du formulaire
            if(isset($_POST['ajouter'])) {
                if($_POST['categorie']!=NULL  && $_POST['nom']!=NULL && $_POST['ingridiants']!=Null){

                    $nom = $_POST['nom'];
                    $ingridiants = $_POST['ingridiants'];
                    $categorie = $_POST['categorie'];
                    $prix=$_POST['prix'];

                    
                    $carte = "INSERT INTO $categorie (nom, ingrediants, prix) VALUES ('$nom','$ingridiants','$prix')";
                    if($connexion->query($carte) === TRUE) {
                            echo "$categorie a bien été ajouté";
                    }
                    else {
                            echo $connexion->error;
                        }
                }
                else{
                    echo " <p>veuillez remplir les champs vide </p>";
                }

            }
        ?>
        </section>
        <H2>La carte</H2>
        
        <div>
            <article>

                <table >
        
                   <tr><td colspan='2'><h3>Entrées</h3></td></tr> 
                   <?php if(isset($_POST['suprimer'])) {
                   
                            $id = $_POST['id'];
                            $suprimers = "DELETE FROM entree where id=$id";
                            
                            $suprimer = $connexion->query($suprimers);

                        }
                    ?>
                    <?php
                        $requete_entrees = "SELECT * FROM entree";
            
                        $entrees = $connexion->query($requete_entrees);
                        
                        
                    ?>
                    <?php while($entree = $entrees->fetch_assoc()) { ?>
                        <?php $id=$entree['id'];?>  
                        <tr> <td><?= $entree['nom']?></td> <td rowspan='2'><?= $entree['prix'] ?>€</td></tr>
                        <tr> <td><?=$entree['ingrediants']?></td></tr>
                        <tr><td> </td><td class="modification"><form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $id?>">
                        <input class="suprimer " type="submit"  onclick="return myConfirm();" value="suprimer" name="suprimer">
                        </form><a class="lienModifier" href="./modifier.php?id=<?=$id?>&categorie=entree">modifier</a></td></tr>
                        <tr class="plats" ><td></td></tr>
                         
                         
                    <?php }?>
                </table>
                
                
            </article>
        </div>
        <div>
            <article>

                <table >
        
                   <tr><td colspan='2'><h3>Plats</h3></td></tr> 
                   <?php if(isset($_POST['suprimer_plat'])) {
                   
                            $id = $_POST['id'];
                    
                            $suprimers = "DELETE FROM plats where id=$id";
                    
                    
                            $suprimer = $connexion->query($suprimers);

                        }
                    ?>
                    <?php
                        $requete_plats = "SELECT * FROM plats";
            
                        $plats = $connexion->query($requete_plats);
                    ?>
                    
                    <?php while($plat = $plats->fetch_assoc()) { ?>
                        <?php $id=$plat['id'];?> 
                       <tr> <td><?= $plat['nom']?></td> <td rowspan='2'><?= $plat['prix'] ?>€</td></tr>
                       <tr> <td><?=$plat['ingrediants']?></td></tr>
                       <tr><td></td><td class="modification"><form action="" method=POST>
                        <input type="hidden" name="id" value="<?= $id?>">
                        <input type="submit" class="suprimer" value="suprimer" onclick="return myConfirm();" name="suprimer_plat">
                        </form><a class="lienModifier" href="./modifier.php?id=<?=$id?>&categore=plats">modifier</a></td></tr>
                       <tr class="plats" ><td></td></tr>
                      
                    <?php }?>
                    
               </table>
               
            </article>

             
        </div>           

        <div>
            <article>

                <table >
        
                   <tr><td colspan='2'><h3>Desserts</h3></td></tr> 
                   <?php if(isset($_POST['suprimer_dessert'])) {
                   
                            $id = $_POST['id'];
                    
                            $suprimers = "DELETE FROM desserts where id=$id";
                    
                            $suprimer = $connexion->query($suprimers);

                         }
                    ?>
                    <?php
                        $requete_desserts = "SELECT * FROM desserts";
            
                        $desserts = $connexion->query($requete_desserts);
                    ?>
                    
                    <?php while($dessert = $desserts->fetch_assoc()) { ?>
                        <?php $id=$dessert['id'];?>
                        <tr> <td><?= $dessert['nom']?></td> <td rowspan='2'><?= $dessert['prix'] ?>€</td></tr>
                        <tr> <td><?=$dessert['ingrediants']?></td></tr>
                        <tr><td></td><td class="modification"><form action="" method=POST>
                        <input type="hidden" name="id" value="<?= $id?>">
                        <input type="submit" class="suprimer" value="suprimer" onclick="return myConfirm();" name="suprimer_dessert">
                        </form><a class="lienModifier" href="./modifier.php?id=<?=$id?>&categorie=desserts">modifier</a></td></tr>
                        <tr class="plats" ><td></td></tr>
                         
                    <?php }?>
                </table>
            </article>

        </div>            
                        
                            

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