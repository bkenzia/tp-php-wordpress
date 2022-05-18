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
                        <input type="text" name="nom" value="<?= $form['champs']['nom']['valeur']; ?>">
                        <label>Votre nom <b class="red-text">(*)</b></label>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" value="<?= $form['champs']['email']['valeur']; ?>">
                        <label>Votre email <b class="red-text">(*)</b></label>
                    </div>
                    <div class="input-field">
                        <label>Votre message <b class="red-text">(*)</b></label>
                        <textarea name="message"><?= $form['champs']['message']['valeur']; ?></textarea>
                    </div>
                    <button class="btn waves-effect waves-light green" type="submit" name="contact">Envoyer
                        <i class="material-icons right">send</i>
                    </button>
                </form>      

                <div>
                    <?php
                    if($form['message_succes']) {
                        echo "<span class='green-text'><i class='material-icons'>check</i>
                        " . $form['message_succes'] . "
                        </span>";
                    }
                    if($form['message_erreur']) {
                        echo "<span class='red-text'><i class='material-icons'>warning</i>
                        " . $form['message_erreur'] . "
                        </span>";
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