<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours PHP</title>
</head>
<body>
    <?php include_once ("./mysqlConfig.php"); ?>
    <h1>Bienvennue sur le COURS PHP</h1>
    <?php 
    echo "voici une page en php <br>";
    $today = date("Y-m-d ");
   
    ?>
    <p> la date d'aujourdhuit est <?=  $today;?></p>
    <form action="" method="POST">
        <input type="text" name="nom" placehoLder='votre nom'>
        <input type="text" name="prenom" placehoLder='votre prénom'>
        <input type="text" name='age' placehoLder='votre age' >
        <input type="submit" name='inscription' value="S'inscrire">
    </form>
    <?php 
        if(isset($_POST['inscription']) && $_POST['prenom']!=NULL  && $_POST['age']!=NULL){
            echo "bonjours ". $_POST['prenom'] ." j'ai age de ". $_POST['age'];
        }
        
    ?>
    <!-- <?php var_dump($_POST)?> -->
    
    <?php
        // Traitement du formulaire
        if(isset($_POST['inscription'])) {
            if($_POST['prenom']!=NULL  && $_POST['age']!=NULL && $_POST['prenom']!=Null){

                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $age = $_POST['age'];
    
                $utilisateur = "INSERT INTO utilisateurs (nom, prenom, age) VALUES ('$nom','$prenom','$age')";
            
                if($connexion->query($utilisateur) === TRUE) {
                    echo "L'utilisateur a bien été ajouté";
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
    <ul>
    <?php
        $requete_utilisateurs = "SELECT * FROM utilisateurs";

        $utilisateurs = $connexion->query($requete_utilisateurs);
    ?>

       <?php while($utilisateur = $utilisateurs->fetch_assoc()) { ?>
            <li> <h2> <?= $utilisateur['prenom']?> <?=$utilisateur['nom']?></h2>
            <p>Age : <?= $utilisateur['age'] ?> ans</p> </li>
        <?php }?>
    
    </ul>

        
</body>
</html>