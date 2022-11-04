<?php
    require_once('./config/connect.php');

    class busca extends connect{

        public function turmas(){

            try{

                $dados = array();

                $sql = $this->pdo->prepare("SELECT * FROM turma ORDER BY `ano`");
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

                $sql = $this->pdo->prepare("SELECT * FROM professores");
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

                $sql  = $this->pdo->prepare("SELECT * FROM alunos");
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

                $sql = $this->pdo->prepare("SELECT * FROM turma WHERE id = :id");
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

                $sql = $this->pdo->prepare("SELECT * FROM professores WHERE id = :id");
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

                $sql  = $this->pdo->prepare("SELECT * FROM alunos WHERE id = :id");
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
