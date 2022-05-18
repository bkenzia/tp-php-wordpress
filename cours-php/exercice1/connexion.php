

<?php
if(!isset($_COOKIE['utilisateur_email']) && !isset($_COOKIE['utilisateur_role'])) {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/connexion.css">
        
        <title>Connexion</title>
    </head>
    <body>
        <?php  session_start(); ?>
        <?php include_once('./header.php') ?>
        <main>
        <div>

            <form action="" method='POST'>
                <legend>Connexion</legend>
                <div class="form">

                    <input type="email" placeholder="email" name="email">
                    <input type="password"placeholder="password" name="password" >
                </div>
                <div class="bnt">

                    <input type="submit" value="se connecter" name="connexion">
                </div>
            </form>
            <?php 
                if(isset($_POST['connexion'])){
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                
                    $requete_utilisateurs = "SELECT * FROM utilisateurs where email='$email'  AND password='$password' ";
                    
                    $utilisateurs = $connexion->query($requete_utilisateurs);
                    $utilisateur=$utilisateurs->fetch_assoc();
                    
                    $cookie_email = $utilisateur['email'];
                    $cookie_role = $utilisateur['role'];
                    //creation des cookies    
                    setcookie('utilisateur_email', $cookie_email, time() + 1800);
                    setcookie('utilisateur_role', $cookie_role, time() + 1800);


                    $logUtilisateur=mysqli_num_rows( $utilisateurs);
                    
                    if($logUtilisateur >0   ){
                        if($utilisateur['role']=='admin'){
                            header('Location: ./compteAdmin.php');
                            echo($utilisateur['role']);
                        }elseif($utilisateur['role']=='utilisateur'){
                            header('Location: ./index.php');
                        } 
                        
                    }else{
                        echo"<p class='error' style='color:red; border:1px solid red ;margin:1rem 10rem; text-align:center'> email ou mot de passe incorrecte</p>";
                    }
                    
                    
                   
                }
            ?>
           <p class="inscription">si vous avez pas un compte <a href="./inscription.php"> crée votre compte</a> </p>
        </div>


        
        </main>
        <?php include_once('./footer.php') ?>
    </body>
</html>
<?php
}?>
