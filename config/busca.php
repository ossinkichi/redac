<?php
    require_once('./config/connect.php');

    class busca extends connect{

        public function turmas(){

            try{

                $dados = array();

                $sql = $this->pdo->prepare("SELECT * FROM turmas");
                $sql->execute();

                $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $dados;

            }catch(PDOException $error){
                echo $error->getMessage()."<br>";
            }
        }

        public function professor(){

            try{
                $dados  = array();

                $sql = $this->pdo->prepare("SELECT * FROM professor");
                $sql->execute();

                $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $dados;
            }catch(PDOException $error){
                echo $error->getMessage()."<br>";
            }
        }

        public function alunos(){

            try{
                $dados = array();

                $sql  = $this->pdo->prepare("SELECT * FROM aluno");
                $sql->execute();

                $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $dados;
            }catch(PDOException $error){
                echo $error->getMessage()."<br>";
            }
        }

        public function bUpdateTurmas($id){

            try{

                $dados = array();

                $sql = $this->pdo->prepare("SELECT * FROM turmas WHERE id = :id");
                $sql->bindValue(":id",$id);
                $sql->execute();

                $dados = $sql->fetch(PDO::FETCH_ASSOC);

                return $dados;

            }catch(PDOException $error){
                echo $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo $erro->getMessage()."<br>";
            }
        }

        public function bUpdateProfessor($id){

            try{
                $dados  = array();

                $sql = $this->pdo->prepare("SELECT * FROM professor WHERE id = :id");
                $sql->bindValue(":id",$id);
                $sql->execute();

                $dados = $sql->fetch(PDO::FETCH_ASSOC);

                return $dados;
            }catch(PDOException $error){
                echo $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo $erro->getMessage()."<br>";
            }
        }

        public function bUpdateAlunos($id){

            try{
                $dados = array();

                $sql  = $this->pdo->prepare("SELECT * FROM aluno WHERE matricula = :id");
                $sql->bindValue(":id",$id);
                $sql->execute();

                $dados = $sql->fetch(PDO::FETCH_ASSOC);

                return $dados;
            }catch(PDOException $error){
                echo $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo $erro->getMessage()."<br>";
            }
        }

        public function sAlunos($search){

            $dados = [];

            $sql = $this->pdo->prepare("SELECT * FROM alunos LIKE :search");
            $sql->bindValue(':search', "%$search%");
            $sql->execute();

            $dados = $sql->fetch(PDO::FETCH_ASSOC);

            return $dados;
        }

    }
