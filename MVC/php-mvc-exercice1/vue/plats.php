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
                <h2><i class="medium material-icons">restaurant_menu</i>Les plats</h2>

                <ul class="collection with-header">

                    <?php
                    // Affichage des plats            
                    foreach($plats as $plat) {

                        echo "<li class='collection-item'>
                            <span><h3>" . $plat['nom'] . "</h3><br>
                            <i>Ingrédients: " . $plat['description'] . "</i></span>
                            <div class='secondary-content'>" . $plat['prix'] . "€</div>
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