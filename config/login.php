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

            $sql =  $this->pdo->prepare("SELECT * FROM professores WHERE nome LIKE :n AND senha = :p");
            $sql->bindValue(":n","%$name%");
            $sql->bindValue(":p",$senha);

            if($sql->execute()){

                $dado = $sql->fetch(PDO::FETCH_ASSOC);

                header('location: ./perfil.php');
                
                return $dado;
            }
        }

        public function aluno($name,$senha){
            $dado = array();

            $sql = $this->pdo->prepare("SELECT * FROM alunos WHERE matricula = :n AND senha = :p");
            $sql->bindValue(":n",$name);
            $sql->bindValue(":p",$senha);

            if($sql->execute()){

                $dado = $sql->fetch(PDO::FETCH_ASSOC);

                header('location: ./perfil.php');
                                
                return $dado;
            }
        }
    }