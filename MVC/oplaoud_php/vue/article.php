<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cours PHP MVC</title>
        <link href="public/css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Cours PHP MVC</h1>
        </header>
        <main>
            <?php
            foreach($articleParId as $article) {

                echo "<h2>" . $article['titre'] . "</h2>
                <img src='../public/images/" . $article['image'] . "'>
                <p>" . $article['contenu'] . "</p>
                <i>Publié le " . $article['date'] . "</i>";
            }
            ?>
        </main>
        <footer>

        </footer>
    </body>
</html>