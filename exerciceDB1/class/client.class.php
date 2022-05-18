 <?php
/*
1- creation de la propriété $produits qui contient tous les produits 
2- creation de la fonction acheterProduit($produit ) : qui permet d'acheter un produit
3- creation de la fonction getFacture() : qui retourne la somme du prix des tous les produits 
*/
    class Client extends Utilisateur {
//1- creation de la propriété $produits qui contient tous les produits 
        protected $produits = array();
        public static $count=0;
    
        public function __construct($lib,$prix){
                parent::__construct($lib,$prix);
                self::$count++;
        }
    // 2- creation de la fonction acheterProduit($produit ) : qui permet d'acheter un produit 
    // donc on doit ajouter les produits acheter dans le tableau $produits 
    public function acheterProduit($produit){
        echo "produit : ". $produit->getLibellee() . " acheté par ". $this->getUserName() ."<br>"; 
        array_push($this->produits,$produit);
    } 

    //3- creation de la fonction getFacture() : qui retourne la somme du prix des tous les produits 
    public function getFactureProduits(){
        echo "Affichage de la facture totale des produits achetés par le client : <br>".
             $this->getUserName() . "<br>";
        $sum=0;
        foreach($this->produits as $produit){
            echo "prix du produit : ". $produit->getLibellee() . " " .$produit->getPrix() ."<br>";
            //$sum = $sum + $produit->getPrix();
            $sum+=$produit->getPrix();
         
            echo "somme totale actuellement est de : ".$sum . "<br>";
        }
        echo "totale de la facture est : " .$sum . "<br> " ;
        return $sum;
    } 

}
?>