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
                <section class="center-align">
                    <h2>Présentation du resto</h2>
                    <p>Le meilleur resto du monde !</p>
                </section>
                <section>
                    <ul>
                        <li>
                            <article>
                                <div class="col s12 m7">
                                    <h2 class="header"><i class="medium material-icons">restaurant</i>Entrées</h2>
                                    <div class="card horizontal">
                                    <div class="card-image">
                                        <img src="public/images/entrees.jpg">
                                    </div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                        <p>Découvrez nos fabuleuses entrées</p>
                                        </div>
                                        <div class="card-action">
                                        <a href="entrees" class="pink-text">Voir les entrées</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article>
                            <div class="col s12 m7">
                                    <h2 class="header"><i class="medium material-icons">restaurant_menu</i>Plats</h2>
                                    <div class="card horizontal">
                                   
                                    <div class="card-stacked">
                                        <div class="card-content">
                                        <p>Découvrez nos fabuleux plats</p>
                                        </div>
                                        <div class="card-action">
                                        <a href="plats" class="pink-text">Voir les plats</a>
                                        </div>
                                    </div>
                                    <div class="card-image">
                                        <img src="public/images/plats.jpg">
                                    </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article>
                            <div class="col s12 m7">
                                    <h2 class="header"><i class="medium material-icons">cake</i>Desserts</h2>
                                    <div class="card horizontal">
                                    <div class="card-image">
                                        <img src="public/images/desserts.jpg">
                                    </div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                        <p>Découvrez nos fabuleux desserts</p>
                                        </div>
                                        <div class="card-action">
                                            <a href="desserts" class="pink-text">Voir les desserts</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ul>
                </section>
            </main>

        </div>

        <?php
        include_once('footer.php');
        ?>
    </body>
</html>