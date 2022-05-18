<?php
    class Dbconn{
        private $serveurname;
        private $username;
        private $password;
        private $connexion;

        public function __construct($serveurname, $username, $password){
            $this->setServeurname($serveurname);
            $this->setUsername($username);
            $this->setPassword($password);
        }

        public function setServeurname($serveurname){
            $this->serveurname=$serveurname;
        }
        public function setUsername($username){
            $this->username=$username;
        }

        public function setPassword($password){
            $this->password=$password;
        }

        public function getServeurname(){
          return  $this->serveurname;
        }
        public function getUsername(){
           return $this->username;
        }

        public function getPassword(){
          return  $this->password;
        }
        



        public function dblnit(){
            $connexion=null;
            try{
                $this->connexion = new PDO("$this->serveurname;port=3306 ", $this->username, $this->password);
                $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'la connexion est réussie';
                return $this->connexion;
            }
            catch(PDOException $e){
                echo"Erreur : " .$e->getMessage();
            }
            
        }


        public function dbCreate($dataBaseName){
            try{
                
                $sql="CREATE DATABASE IF NOT EXISTS $dataBaseName";
                $this->connexion->exec($sql);
                echo 'Base de données est bien crée !';
            }
            catch(PDOException $e){
                echo"Erreur : " .$e->getMessage();
            }
        }

       public function closeConnection() {
            
            $this->connexion = null;
            
        }
        public function drop($dataBaseName){
            try{
                
                $sql="DROP DATABASE IF EXISTS $dataBaseName";
                $this->connexion->exec($sql);
                echo 'la base de données est suprimer !';
            }
            catch(PDOException $e){
                echo"Erreur : " .$e->getMessage();
            }
        }

        public function createTableUtilisateur(){
            $sql="CREATE TABLE utilisateur(Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(40) NOT NULL, password VARCHAR(255) NOT NULL)";
            
            $this->connexion->exec($sql);
        }


        public function createTableProduit(){
            $sql="CREATE TABLE produit(Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            libellee VARCHAR(40) NOT NULL, img_link VARCHAR(255) NOT NULL, prix INT NOT NULL, poids VARCHAR(40) NOT NULL)";
            
            $this->connexion->exec($sql);
        }
        public function ajouterUtilisateur($nom, $password){
            $utilisateur=$this->connexion->prepare("INSERT INTO utilisateur(name, password)VALUE(:name, :password)");
            $utilisateur->bindValue(':name',$nom);
            $utilisateur->bindValue(':password',$password);
            $utilisateur->execute();

            echo"l'entrée est a joutée dans la table utilisateur";
        }
    }