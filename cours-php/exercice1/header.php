<header>
    <?php include_once('./mysqlConfig.php');
        include_once('deconnexion.php'); 
    ?>
        <h1>Resto'</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="laCarte.php">La carte</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- si on a pas utilisateur afficher 'Connexion' sinon 'deconnexion' -->
                <?php
                    if(!isset($_COOKIE['utilisateur_email'])) {
                ?>
                <li><a href="./connexion.php">Connexion</a></li>
                
                <?php } else { ?>
                <li><form  class="deconnexion" method="POST">
                    <input type="submit" name="deconnexion" value="Se déconnecter" class="btn btn-danger">
                </form></li> 
                
                <?php }?>
                <!-- si on a utilisateur avec role admin afficher le lient 'mon compte' admin -->
                <?php
                    if(isset($_COOKIE['utilisateur_email']) && $_COOKIE['utilisateur_role'] == 'admin') {
                ?>
                <li> <a href="./compteAdmin.php">compte admin </a> </li>
                  <?php }?>
            </ul>
        </nav>
    </header>