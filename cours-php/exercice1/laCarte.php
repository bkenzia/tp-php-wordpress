<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <title>La carte</title>
</head>
<body>
    <?php include_once('./header.php') ?>
    <main>
        <H2>Notre carte</H2>
        
            <div>
                <article>

                    <table >
            
                       <tr><td colspan='2'><h3>Entrées</h3></td></tr> 
                        <?php
                        // sélectionner tout les entrées
                            $requete_entrees = "SELECT * FROM entree";
                
                            $entrees = $connexion->query($requete_entrees);
                        ?>
                        <?php while($entree = $entrees->fetch_assoc()) { ?>
                             <tr> <td><?= $entree['nom']?></td> <td rowspan='2'><?= $entree['prix'] ?>€</td></tr>
                             <tr> <td><?=$entree['ingrediants']?></td></tr>
                             <tr class="plats" ><td></td></tr>
                             
                        <?php }?>
                    </table>
                    
                </article>
            </div>
            <div>
                <article>

                    <table >
            
                       <tr><td colspan='2'><h3>Plats</h3></td></tr> 
                        <?php
                        // sélectionner tout les plats
                            $requete_plats = "SELECT * FROM plats";
                
                            $plats = $connexion->query($requete_plats);
                        ?>
                        <?php while($plat = $plats->fetch_assoc()) { ?>
                           <tr> <td><?= $plat['nom']?></td> <td rowspan='2'><?= $plat['prix'] ?>€</td></tr>
                           <tr> <td><?=$plat['ingrediants']?></td></tr>
                           <tr class="plats" ><td></td></tr>
                          
                        <?php }?>
                   </table>
                </article>

                 
            </div>           
    
            <div>
                <article>

                    <table >
            
                       <tr><td colspan='2'><h3>Desserts</h3></td></tr> 
                        <?php
                            // sélectionner tout les desserts
                            $requete_desserts = "SELECT * FROM desserts";
                
                            $desserts = $connexion->query($requete_desserts);
                        ?>
                        <?php while($dessert = $desserts->fetch_assoc()) { ?>
                            <tr> <td><?= $dessert['nom']?></td> <td rowspan='2'><?= $dessert['prix'] ?>€</td></tr>
                            <tr> <td><?=$dessert['ingrediants']?></td></tr>
                            <tr class="plats" ><td></td></tr>
                             
                        <?php }?>
                    </table>
                </article>

            </div>            
        
    </main>
    <?php include_once('./footer.php') ?>
</body>
</html>