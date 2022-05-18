<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/connexion.css">
        
        <title>Document</title>
    </head>
    <body>
        <?php  session_start(); ?>
        <?php include_once('./header.php') ?>
        <main>
        <div>

            <form action="" method='POST'>
                <legend>Inscription</legend>
                <div class="form">

                    <input type="email" placeholder="email" name="email">
                    <input type="password"placeholder="password" name="password" >
                </div>
                <div class="bnt">

                    <input type="submit" value="s'inscrire" name="inscription">
                </div>
            </form>
           

            <?php
        // Traitement du formulaire
        if(isset($_POST['inscription'])) {
            if($_POST['email']!=NULL  && $_POST['password']!=NULL ){

                $email = $_POST['email'];
                $password = $_POST['password'];
                
    
                $utilisateur = "INSERT INTO utilisateurs (email, password) VALUES ('$email','$password')";
            
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

        </main>
        <?php include_once('./footer.php') ?>
    </body>
</html>