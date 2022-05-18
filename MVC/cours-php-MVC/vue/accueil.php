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
            <section>
                <h2>Bienvenue sur la page d'accueil</h2>
            </section>
            <section>
                <h2>Articles</h2>
                <ul>
                    <?php
                    foreach($articles as $article) {

                        echo "<li>
                            <article>
                                " . $article['titre'] . "
                                <i>Publié le " . $article['date'] . "</i>
                                <a href='article/" . $article['id'] . "'>Lire l'article</a>
                            </article>
                        </li>";
                    }
                    ?>
                </ul>
            </section>
        </main>
        <footer>

        </footer>
    </body>
</html>