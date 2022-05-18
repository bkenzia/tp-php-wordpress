<?php 

class DbConn
{
    //informations de notre connexion a mysql
    private $servername;
    private $username;
    private $password;

    //objet de connection PDO
    private $connection;

    function __construct($servername,$username,$password){
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
    }

    //initialisation de la connection PDO 
    // utiliser l'attribut connection pour sauvegarder l'objet PDO
    function dbInit(){
        try {
            $this->connection = new PDO($this->servername, $this->username, $this->password);
            $this->connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
//creation de la base de données à l'aide de l'objet pdo $connection prcedemment
//enregistré
    function dbCreate($databaseName){
        try {
            $sqlRequest = "CREATE DATABASE IF NOT EXISTS $databaseName";
            $this->connection->exec($sqlRequest);
            $this->connection->exec("USE $databaseName");
        } catch (PDOException $th) {
            echo $th->getMessage();
        }

    }

    public function createTableUtilisateur(){
        $sql="CREATE TABLE IF NOT EXISTS utilisateur(Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(40) NOT NULL, password VARCHAR(255) NOT NULL)";
        
        $this->connection->exec($sql);
    }



    public function createTableProduit($utilisateur){
        $sql="CREATE TABLE produit(Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        libellee VARCHAR(40) NOT NULL, img_link VARCHAR(255) NOT NULL, prix INT NOT NULL, poids VARCHAR(40) NOT NULL)";
        
        $this->connection->exec($sql);
    }
    public function ajouterUtilisateur($utilisateur){
        $sql=$this->connection->prepare("INSERT INTO utilisateur(name, password)VALUE(:name, :password)");
        $sql->bindValue(':name',$utilisateur->getUserName());
        $sql->bindValue(':password',$utilisateur->getUserPass());
        $sql->execute();

        echo"l'entrée est a joutée dans la table utilisateur";
    }

    public function selectAllUsers(){
        $sql=$this->connection->prepare("SELECT * FROM utilisateur");
        $sql->execute();
       return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    //detruire l'objet PDO $connection qui mettra fin a la connection 
    function closeConnexion(){
        $this->connection=null;
    }

}
?>