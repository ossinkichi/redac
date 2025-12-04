<?php

    require_once('./config/connect.php');

    class freq extends connect{

        public function getFreq($turma){

            $sql = $this->pdo->prepare('SELECT * FROM frequenciia WHERE turma = :t');
            $sql->bindValue(':t',$turma);
            $sql->execute();

            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $dados;
        }

        public function setFreq($mat,$seg,$ter,$qua,$qui,$sex){

            try{
                $sql = $this->pdo->prepare('INSERT INTO frequenciia(segunda,terca,quarta,quinta,sexta) VALUES(:seg,:ter,:qua,:qui,:sex) WHERE matricula = :m');
                $sql->bindValue(':m',$mat);
                $sql->bindValue(':seg',$seg);
                $sql->bindValue(':ter',$ter);
                $sql->bindValue(':qua',$qua);
                $sql->bindValue(':qui',$qui);
                $sql->bindValue(':sex',$sex);
                $sql->execute();
            }catch(PDOException $error){
                $error;
            }
        }
    }