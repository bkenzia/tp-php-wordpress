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
            <main class="row">
                    <section class="col-12 col-lg-8">
                        <h2 class='text-center'>Les entrées</h2>

                        <ul class="row">
                        <?php
                            foreach($entrees as $entree) {
                                ?>
                            <h2 class='col-12'><?= $entree['nom']?> </h2>
                            <p class='col-6'><?= $entree['ingrediants'] ?></p>
                            <p class='col-6'><?= $entree['prix'] ?></p>
                            <div class= "col-12 border border-dark"></div>
                         <?php   }
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