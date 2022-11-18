<?php

    class connect{

        protected $pdo;

        public function __construct($dbname,$host,$usuario,$senha){

            try{
            
                $this->pdo = new PDO("mysql:dbname=$dbname;host=$host",$usuario,$senha);

            }catch(PDOException $error){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."</br>";
            }
        }

    }