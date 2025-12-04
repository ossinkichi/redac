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
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
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
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
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
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
            }
        }

        public function curso(){

            try {
                $dados = [];

                $sql = $this->pdo->prepare('SELECT * FROM cursos');
                $sql->execute();

                $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $dados;
            } catch (PDOException $error) {
                echo $error->getMessage();
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
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $erro->getMessage()."<br>";
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
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $erro->getMessage()."<br>";
            }
        }

        public function bUpdateAlunos($id){

            try{
                $dados = array();

                $sql  = $this->pdo->prepare("SELECT matricula,nome,nascimento,telefone,email,serie,curso,turno,turma,situacao FROM aluno WHERE matricula = :id");
                $sql->bindValue(":id",$id);
                $sql->execute();

                $dados = $sql->fetch(PDO::FETCH_ASSOC);

                return $dados;
            }catch(PDOException $error){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $erro->getMessage()."<br>";
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
