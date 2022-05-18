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
                <h2><i class="medium material-icons">cake</i>Les desserts</h2>
 
                <ul class="collection with-header">

                    <?php
                    // Affichage des desserts
                    foreach($desserts as $dessert) {

                        echo "<li class='collection-item'>
                            <span><h3>" . $dessert['nom'] . "</h3><br>
                            <i>Ingrédients: " . $dessert['description'] . "</i></span>
                            <div class='secondary-content'>" . $dessert['prix'] . "€</div>
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