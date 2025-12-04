<?php
    require_once('./config/connect.php');

    class login extends connect{

        public function admin($name,$senha){

            $dado = array();

            $sql = $this->pdo->prepare("SELECT * FROM secretaria WHERE nome = :n AND senha = :p");
            $sql->bindValue(":n",$name);
            $sql->bindValue(":p",$senha);
            
            if($sql->execute()){

                $dado = $sql->fetch(PDO::FETCH_ASSOC);

                header('location: ./secret.php');

                return $dado;
            }

        }

        public function prof($name,$senha){
            $dado = array();

            $sql =  $this->pdo->prepare("SELECT * FROM professor WHERE email = :n AND id = :p");
            $sql->bindValue(":n","$name");
            $sql->bindValue(":p",$senha);

            if($sql->execute()){

                $dado = $sql->fetch(PDO::FETCH_ASSOC);

                //echo count($dado);

                header('location: ./perfil.php');
                
                return $dado;
            }
        }

        public function aluno($name){
            $dado = array();

            $sql = $this->pdo->prepare("SELECT * FROM aluno WHERE matricula = :n");
            $sql->bindValue(":n",$name);

            if($sql->execute()){

                $dado = $sql->fetch(PDO::FETCH_ASSOC);

                header('location: ./perfil.php');
                                
                return $dado;
            }
        }
    }