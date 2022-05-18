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
                <h2><i class="medium material-icons"><?=$icon ?></i><?=$url ?></h2>

                <ul class="collection with-header">

                    <?php
                    // Affichage des entrées            
                    foreach($entrees as $entree) {

                        echo "<li class='collection-item'>
                            <span><h3>" . $entree['nom'] . "</h3><br>
                            <i>Ingrédients: " . $entree['prix'] . "</i></span>
                            <div class='secondary-content'>" . $entree['prix'] . "€</div>
                        </li>";
                    }
                    ?>

                </ul>
            </main>
            
        </div>

        <?php
        include_once('footer.php');
        ?>
    </body>
</html>