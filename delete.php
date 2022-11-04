<?php

    require_once('./config/opt.php');
    require('./var.php');

    $opt = new option($dbname,$host,$usuario,$senha);

    if(isset($_GET['excluirturm'])){

        $table = 'turma';
        $id = addslashes($_GET['excluirturm']);

        $opt->delete($table,$id);

    }else if(isset($_GET['excluiralu'])){

        $table = 'alunos';
        $id = addslashes($_GET['excluiralu']);

        $opt->delete($table,$id);

    }else if(isset($_GET['excluirprof'])){

        $table = 'professores';
        $id = addslashes($_GET['excluirprof']);

        $opt->delete($table,$id);

    }else{}
