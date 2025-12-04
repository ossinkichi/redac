<?php

    require_once('./config/connect.php');

    class nota extends connect{

        public function getNota($turma){

            $sql = $this->pdo->prepare('SELECT * FROM nota WHERE turma = :t');
            $sql->bindValue(':t',$turma);
            $sql->execute();

            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $dados;
        }
    }