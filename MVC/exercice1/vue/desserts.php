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
                        <h2 class='text-center'>Les desserts</h2>

                        <ul class="row">
                        <?php
                        
                     
                            foreach($desserts as $dessert) {
                                ?>
                            <h2 class='col-12'><?= $dessert['nom']?> </h2>
                            <p class='col-6'><?= $dessert['ingrediants'] ?></p>
                            <p class='col-6'><?= $dessert['prix'] ?></p>
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