<?php

    require_once('connect.php');

    class option extends connect{

        public function editAluno($matricula,$name,$nasc,$ano,$cur,$turn,$sala,$email,$tel,$sit,$id){


            try{
                $sql = $this->pdo->prepare("UPDATE aluno SET matricula = :mat, nome = :nam, nascimento = :nasc,telefone = :t, email = :em, serie = :an, curso = :cur, turno = :tur, turma = :sal, situacao = :sit  WHERE matricula = :id");
                $sql->bindValue(":id",$id);
                $sql->bindValue(":mat",$matricula);
                $sql->bindValue(":nam",$name);
                $sql->bindValue(":em",$email);
                $sql->bindValue(":t",$tel);
                $sql->bindValue(":nasc",$nasc);
                $sql->bindValue("an",$ano);
                $sql->bindValue(":cur",$cur);
                $sql->bindValue(":tur",$turn);
                $sql->bindValue(":sal",$sala);
                $sql->bindValue(":si",$sit);
                                
                if($sql->execute()){
                    header('location: ./secret.php');
                }

            }catch(PDOException $error){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $erro->getMessage()."<br>";
            }
        }

        public function editProf($nome,$nasc,$mater,$tel,$mail,$id){

            try {
                
                $sql = $this->pdo->prepare("UPDATE professor SET nome = :nom, nascimento = :nasc, materia = :mat, telefone = :t, email = :m WHERE id = :id");
                $sql->bindValue(":id",$id);
                $sql->bindValue(":nom",$nome);
                $sql->bindValue(":nasc",$nasc);
                $sql->bindValue(":mat",$mater);
                $sql->bindValue(":t",$tel);
                $sql->bindValue(":m",$mail);
                
                if($sql->execute()){
                    header('location: ./secret.php');
                }

            } catch (PDOException $error) {
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
            } catch(Exception $erro){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                 $erro->getMessage()."<br>";
            }

        }
        
        public function editTurmas($ano,$turn,$cur,$turm,$id){

            try{

                $sql = $this->pdo->prepare("UPDATE turmas SET serie = :a , curso = :cu, turno = :turn ,sala = :turm  WHERE id = :id");
                $sql->bindValue(":id",$id);
                $sql->bindValue(":a", $ano);
                $sql->bindValue(":cu", $cur);
                $sql->bindValue(":turn", $turn);
                $sql->bindValue(":turm", $turm);
                                
                if($sql->execute()){
                    header('location: ./secret.php');
                }
            
            }catch(PDOException $error){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $erro->getMessage()."<br>";
            }

        }

    }