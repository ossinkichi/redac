<?php

    require_once('connect.php');

    class option extends connect{

        public function editAluno($matricula,$name,$nasc,$ano,$cur,$tur,$sal,$form,$pass,$id){


            try{
                $sql = $this->pdo->prepare("UPDATE alunos SET matricula = :mat, nome = :nam, nascimento = :nasc, ano = :an, curso = :cur, turno = :tur, turma = :sal, senha = :se, formado = :f WHERE id = :id");
                $sql->bindValue(":id",$id);
                $sql->bindValue(":mat",$matricula);
                $sql->bindValue(":nam",$name);
                $sql->bindValue(":nasc",$nasc);
                $sql->bindValue("an",$ano);
                $sql->bindValue(":cur",$cur);
                $sql->bindValue(":tur",$tur);
                $sql->bindValue(":sal",$sal);
                $sql->bindValue(":se",$pass);
                $sql->bindValue(":f",$form);
                                
                if($sql->execute()){
                    header('location: ./secret.php');
                }

            }catch(PDOException $error){
                echo $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo $erro->getMessage()."<br>";
            }
        }

        public function editProf($nome,$nasc,$tel,$mater,$pass,$id){

            try {
                
                $sql = $this->pdo->prepare("UPDATE professores SET nome = :nom, nascimento = :nasc, materia = :mat, telefone = :t, senha = :p WHERE id = :id");
                $sql->bindValue(":id",$id);
                $sql->bindValue(":nom",$nome);
                $sql->bindValue(":nasc",$nasc);
                $sql->bindValue(":mat",$mater);
                $sql->bindValue(":t",$tel);
                $sql->bindValue(":p",$pass);
                
                if($sql->execute()){
                    header('location: ./secret.php');
                }

            } catch (PDOException $error) {
                echo $error->getMessage()."<br>";
            } catch(Exception $erro){
                echo $erro->getMessage()."<br>";
            }

        }
        
        public function editTurmas($ano,$sal,$tur,$id){

            try{

                $sql = $this->pdo->prepare("UPDATE turma SET ano = :a , turma = :turm , turno = :turn WHERE id = :id");
                $sql->bindValue(":id",$id);
                $sql->bindValue(":a", $ano);
                $sql->bindValue(":turm", $sal);
                $sql->bindValue(":turn", $tur);
                                
                if($sql->execute()){
                    header('location: ./secret.php');
                }
            
            }catch(PDOException $error){
                echo $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo $erro->getMessage()."<br>";
            }

        }

    }