<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Cours PHP MVC - class</title>
    </head>
    <body>
        <header>
            <h1>Cours PHP MVC - class</h1>
        </header>
        <main>

            <section>
                <h2>Articles</h2>
                <ul>
                <?php
                foreach($articles as $article) {

                    echo "<li>
                        <article>
                            <h3>" . $article['titre'] . "</h3>
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