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
                <?php
                foreach($articleParId as $article) {

                    echo "<h2>" . $article['titre'] . "</h2><br>
                            <p>" . $article['contenu'] . "</p>";
                }
                ?>
            </main>
        </div>
        <?php
        include_once('footer.php');
        ?>
    </body>
</html>