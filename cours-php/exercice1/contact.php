<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/contacte.css">
    <title>Document</title>
</head>
<body>
    <?php include_once('./header.php') ?>
    <main>
        <section >
            <H2 >contacte</H2>
            <form action="" method='POST' class="form_contact">
                
                <div class="form">

                    <input type="text" placeholder="nom" name="nom">
                    <input type="text"placeholder="prénom" name="prenom" >
                </div>
                
                <div>

                    <input type="email" placeholder="email" name="email">
                    <textarea name="message"  cols="25" rows="10"></textarea>
                </div>
                
                <div class="bnt">

                    <input type="submit" value="envoyer" name="envoyer">
                </div>
            </form>
            
        <?php
        // Traitement du formulaire
            if(isset($_POST['envoyer'])) {
                if($_POST['prenom']!=NULL  && $_POST['nom']!=NULL && $_POST['email']!=Null && $_POST['message']!=Null){

                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $email = $_POST['email'];
                    $message=$_POST['message'];

                    
                    $contact = "INSERT INTO contact (nom, prenom, email, message) VALUES ('$nom','$prenom','$email', '$message')";
                    if($connexion->query($contact) === TRUE) {
                            echo "votre message  a bien été envoyer";
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
        
    </main>
    <?php include_once('./footer.php') ?>
</body>
</html>