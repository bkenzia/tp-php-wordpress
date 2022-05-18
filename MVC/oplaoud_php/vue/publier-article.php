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
                <h2>Publier un article</h2>
                <form method="POST" enctype="multipart/form-data">
                    <input type="text" name="titre" placeholder="Titre">
                    <br>
                    <textarea name="contenu"></textarea>
                    <br>
                    <input type="file" id="image" name="image">
                    <div id="list"></div>
                    <br>
                    <input type="submit" name="publier-article" value="Publier l'article">
                </form>
            </section>
        </main>
        <footer>

        </footer>

        <script type="text/javascript" src="public/js/script.js"></script>
    </body>
</html>