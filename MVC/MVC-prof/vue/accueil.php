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
                    <h2>Les articles</h2>

                    <ul class="row">
                        <?php
                        foreach($articles as $article) {
                            ?>

                                <li class="col-12 col-lg-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $article['titre'] ;?></h5>
                                            <a href="article/<?= $article['id'] ;?>" class="btn btn-primary">Lire l'article</a>
                                        </div>
                                    </div>
                                </li>

                                <?php
                        }
                        ?>
                    </ul>

                    </section>
                <aside class="col-12 col-lg-4">
                    <h2>Les articles récents</h2>
                    
                    <ul class="row">
                        <?php
                        foreach($articlesRecents as $article) {
                            ?>

                            <li class="col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $article['titre'] ;?></h5>
                                        <a href="article/<?= $article['id'] ;?>" class="btn btn-primary">Lire l'article</a>
                                    </div>
                                </div>
                            </li>

                            <?php
                        }
                        ?>
                    </ul>
                </aside>    
            </main>
        </div>
        <?php
        include_once('footer.php');
        ?>
    </body>
</html>