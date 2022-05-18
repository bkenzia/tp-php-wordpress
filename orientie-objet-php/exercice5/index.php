<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        spl_autoload_register(function ($class_name) {
        require_once 'class/'.$class_name . '.class.php';
        });
    ?>    
    <?php
        $client1=new Client('client1', '123');
        $client2=new Client('client2', '123');
        $client3=new Client('client3', '123');
        $client4=new Client('client4', '000');
        $client4::$nbClient;
        
        $admin1=new Admin('admin1', 'admin');
        $admin2=new Admin('admin2', 'admin2');
        // var_dump($admin1->getUserName());
        $admin1->eiditPassword($client1, 'adc');
       
        // var_dump($client1);
        $admin1->setBan($client1);
        $admin1->setBan($client2);
        $admin1->setBan($client3);
        $admin2->setBan($client4);
        
       echo"nombre des clients est ". $admin1::$nbClient."<br>";
      echo "les clientsAdmin1 <br>". $admin1->getBan()."<br>";
      echo "les clients Admin2 <br>". $admin2->getBan()."<br>";
        // $admin1->setBan('test');
        
        $admin1->suprimer($client2);
        //    echo $admin1->getBan(); 

        $produit1=new Produit('produit1', '1');
        $produit2=new Produit('produit1', '2');
        $produit3=new Produit('produit1', '6');
        echo $produit2::$nbProduits ."<br>";
        // var_dump($produit1);

        $client1->acheterProduit($produit1);
        $client1->acheterProduit($produit2);
        $client1->acheterProduit($produit3);
        echo $client1->getProduit();
        echo $client1->getFacture()

        
    ?>
</body>
</html>