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
            <main class="text-center mb-5">
            
            <section >
                <H2  class="text-center m-4">contacte</H2>
                <form class="border border-dark pl-5 pt-4 pb-4 pr-6 text-center" action="" method='POST' class="form_contact">
                
                    <div class="row">

                        <input class="col-5  m-2 p-2" type="text" placeholder="nom" name="nom">
                        <input class="col-5 m-2 p-2 " type="text"placeholder="prénom" name="prenom" >
                        <input class="col-5 m-2 p-2" type="email" placeholder="email" name="email">
                    </div>
                
                    <div class="text-center m-2">

                        
                        <textarea  name="message"  cols="50" rows="10"></textarea>
                    </div>
                
                    <div class="text-center">

                        <input type="submit" value="envoyer" name="envoyer">
                    </div>
                </form>
            
            </main>
        </div>
        <?php
        include_once('footer.php');
        ?>
    </body>
</html>