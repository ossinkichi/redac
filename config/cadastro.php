<?php

    require_once('./config/connect.php');

    class cadastro extends connect{

        public function turmas($ano,$sal,$tur){

            try{

                $sql = $this->pdo->prepare("INSERT INTO turma(ano, turma, turno) VALUES(:a , :turm , :turn)");
                $sql->bindValue(":a", $ano);
                $sql->bindValue(":turm", $sal);
                $sql->bindValue(":turn", $tur);
                $sql->execute();
            
            }catch(PDOException $error){
                echo $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo $erro->getMessage()."<br>";
            }

        }

        public function professor($nome,$nasc,$tel,$mater,$pass){

            try {
                
                $sql = $this->pdo->prepare("INSERT INTO professores(nome, nascimento, materia, telefone, senha) 
                                                VALUES(:nom, :nasc, :t, :mat, :p)");
                $sql->bindValue(":nom",$nome);
                $sql->bindValue(":nasc",$nasc);
                $sql->bindValue(":mat",$mater);
                $sql->bindValue(":t",$tel);
                $sql->bindValue(":p",$pass);
                $sql->execute();

            } catch (PDOException $error) {
                echo $error->getMessage()."<br>";
            } catch(Exception $erro){
                echo $erro->getMessage()."<br>";
            }

        }

        public function aluno($matricula,$name,$nasc,$ano,$cur,$tur,$sal,$form,$pass){

            try {

                $sql = $this->pdo->prepare("INSERT INTO alunos(matricula,nome,nascimento,ano,curso,turno,turma,senha,formado)
                                            VALUES(:mat,:nam,:nasc,:an,:cur,:tur,:sal,:se,:f)");
                $sql->bindValue(":mat",$matricula);
                $sql->bindValue(":nam",$name);
                $sql->bindValue(":nasc",$nasc);
                $sql->bindValue("an",$ano);
                $sql->bindValue(":cur",$cur);
                $sql->bindValue(":tur",$tur);
                $sql->bindValue(":sal",$sal);
                $sql->bindValue(":se",$pass);
                $sql->bindValue(":f",$form);
                $sql->execute();

            } catch (PDOException $error) {
                echo $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo $erro->getMessage()."<br>";
            }
        }

    }