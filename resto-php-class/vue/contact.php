<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once('head.php');
        ?>
    </head>
    <body>
        <?php
        include_once('header.php');
        ?>
    
        <div class="container">

            <main>
                <h2>Nous contacter</h2>
                <form method="POST">
                    <div class="input-field">
                        
                            <input type="text" name="nom" <?php if($form!=NULL && isset($form['champs']['nom'])){?> value="<?= $form['champs']['nom']['valeur'];?>"<?php }?>>
                        
                        <label>Votre nom <b class="red-text">(*)</b></label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="prenom" <?php if($form!=NULL && isset($form['champs']['prenom'])){?> value="<?= $form['champs']['prenom']['valeur'];?>"<?php }?>>
                        <label>Votre prénom <b class="red-text">(*)</b></label>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" <?php if($form!=NULL && isset($form['champs']['email'])){?> value="<?= $form['champs']['email']['valeur'];?>"<?php }?>>
                        <label>Votre email <b class="red-text">(*)</b></label>
                    </div>
                    <div class="input-field">
                        <label>Votre message <b class="red-text">(*)</b></label>
                        <textarea name="message" ><?php if($form!=NULL && isset($form['champs']['message'])){?> <?= $form['champs']['message']['valeur'];?><?php }?></textarea>
                    </div>
                    <button class="btn waves-effect waves-light green" type="submit" name="contact">Envoyer
                        <i class="material-icons right">send</i>
                    </button>
                </form>      
                <div>
                    <?php
                  
                    if($form!=NULL){

                        if($form['message_succes']!=NULL) {
                            echo "<span class='green-text'><i class='material-icons'>check</i>
                            " . $form['message_succes'] . "
                            </span>";
                        }
                        if($form['message_erreur']!=NULL) {
                            echo "<span class='red-text'><i class='material-icons'>warning</i>
                            " . $form['message_erreur'] . "
                            </span>";
                        }
                    }

                    ?>
                </div>
                
            </main>

        </div>

        <?php
        include_once('footer.php');
        ?>
    </body>
</html>