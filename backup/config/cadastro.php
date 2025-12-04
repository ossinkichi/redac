<?php

    require_once('./config/connect.php');

    class cadastro extends connect{

        public function turmas($ano,$turn,$cur,$turm){

            try{

                $sql = $this->pdo->prepare("INSERT INTO turmas(serie, curso, turno, sala) VALUES(:s , :cur , :turn, :sal)");
                $sql->bindValue(":s", $ano);
                $sql->bindValue(":cur", $cur);
                $sql->bindValue(":turn", $turn);
                $sql->bindValue(":sal", $turm);
                
                if($sql->execute()){
                    return "<p style ='background: red; widht: 100vw; padding: 12px; border: 1px solid;'>Cadastrado com sucesso</p>";
                }else{
                    return "<p style ='background: red; widht: 100vw; padding: 12px; border: 1px solid;'>Erro ao cadastrar</p>";
                }
            
            }catch(PDOException $error){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $erro->getMessage()."<br>";
            }

        }

        public function professor($nome,$nasc,$tel,$mater,$pass){

            try {
                
                $sql = $this->pdo->prepare("INSERT INTO professor(nome, nascimento, materia, telefone, email)VALUES(:nom, :nasc, :t, :mat, :e)");
                $sql->bindValue(":nom",$nome);
                $sql->bindValue(":nasc",$nasc);
                $sql->bindValue(":mat",$mater);
                $sql->bindValue(":t",$tel);
                $sql->bindValue(":e",$pass);
                
                if($sql->execute()){
                    return "<p style ='background: red; widht: 100vw; padding: 12px; border: 1px solid;'>Cadastrado com sucesso</p>";
                }else{
                    return "<p style ='background: red; widht: 100vw; padding: 12px; border: 1px solid;'>Erro ao cadastrar</p>";
                }

            } catch (PDOException $error) {
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
            } catch(Exception $erro){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $erro->getMessage()."<br>";
            }

        }

        public function aluno($matricula,$name,$nasc,$serie,$cur,$tur,$sal,$email,$tel,$sit){

            try {

                $sql = $this->pdo->prepare("INSERT INTO aluno(matricula,nome,nascimento,telefone,email,serie,curso,turno,turma,situacao)
                VALUES(:mat,:nam,:nasc,:tel,:em,:s,:cur,:turn,:turm,:si)");
                $sql->bindValue(":mat",$matricula);
                $sql->bindValue(":nam",$name);
                $sql->bindValue(":nasc",$nasc);
                $sql->bindValue(":tel",$tel);
                $sql->bindValue(":em",$email);
                $sql->bindValue(":s",$serie);
                $sql->bindValue(":cur",$cur);
                $sql->bindValue(":turn",$tur);
                $sql->bindValue(":turm",$sal);
                $sql->bindValue(":si",$sit);
                                
                if($sql->execute()){
                    return "<p style ='background: red; widht: 100vw; padding: 12px; border: 1px solid;'>Cadastrado com sucesso</p>";
                }else{
                    return "<p style ='background: red; widht: 100vw; padding: 12px; border: 1px solid;'>Erro ao cadastrar</p>";
                }

            } catch (PDOException $error) {
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $error->getMessage()."<br>";
            }catch(Exception $erro){
                echo '<p style="background: red; padding:12px;">Algo deu errado, tente mais tarde</p>';
                $erro->getMessage()."<br>";
            }
        }

        public function freq($mat,$nome,$turma){

            $sql = $this->pdo->prepare('INSERT INTO frequenciia(matricula,nome,turma) VALUES(:m,:n,:t)');
            $sql->bindValue(':m',$mat);
            $sql->bindValue(':n',$nome);
            $sql->bindValue(':t',$turma);
            $sql->execute();
        }

        public function nota($mat,$nome,$turma){

            $sql = $this->pdo->prepare('INSERT INTO nota(matricula,nome,turma) VALUES(:m,:n,:t)');
            $sql->bindValue(':m',$mat);
            $sql->bindValue(':n',$nome);
            $sql->bindValue(':t',$turma);
            $sql->execute();
        }

    }