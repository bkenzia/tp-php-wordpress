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
                <?php
                foreach($articleParId as $article) {

                    echo "
                        <article>
                            <h2>" . $article['titre'] . "</h2>
                            <img src='../public/images/" . $article['image'] . "'>
                            <p>" . $article['contenu'] . "</p>
                            <i>Publié le " . $article['date'] . "</i>
                        </article>
                    ";
                }
                ?>

            </section>

        </main>
        <footer>

        </footer>
    </body>
</html>