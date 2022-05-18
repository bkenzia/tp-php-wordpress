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
                <section>
                    <h2>Les entrées</h2>
                    <ul class="collection with-header">

                        <?php
                        // Affichage des entrées            
                        foreach($entrees as $entree) {

                            echo "<li class='collection-item'>
                                <span><h3>" . $entree['nom'] . "</h3><br>
                                <i>Ingrédients: " . $entree['description'] . "</i></span>
                                <div class='secondary-content'>" . $entree['prix'] . "€</div>
                            </li>";
                        }
                        ?>

                    </ul>
                </section>

                <section>
                    <h2>Les plats</h2>
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
                </section>

                <section>
                    <h2>Les desserts</h2>
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
                </section>
            </main>

        </div>

        <?php
        include_once('footer.php');
        ?>
    </body>
</html>