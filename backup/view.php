<head>
    <title>View</title>
    <link rel="stylesheet" href="./css/list.css">
</head>
<?php


    session_start();
    // require('./verify.php');
    require_once('./var.php');
    require_once('./config/freq.php');

    
    include('./layouts/header-perfil.php');

    ?>  
        <div class="opt">
            <a href="?freq">Frequencia</a>
            <a href="?not">Notas</a>
        </div>
    <?php

    if(isset($_GET['freq'])){
        
        
        if(isset($_GET['turma'])){
            $turma = $_GET['turma'];
            
            $f = new freq($dbname,$host,$usuario,$senha);
            $dados = $f->getFreq($turma);
            
            include('./layouts/prof-lis/frequencia.php');
        }else{
            ?>
            <section>
                <p class="vaz">Vazio</p>
            </section>
            <?php
        }
        

    }else if(isset($_GET['not'])){

        require_once('./config/nota.php');
        
        
        if(isset($_GET['turma'])){
            $turma = $_GET['turma'];
            
            $f = new freq($dbname,$host,$usuario,$senha);
            $dados = $f->getfreq($turma);
            
            include('./layouts/prof-lis/notas.php');
        }else{
            ?>
            <section>
                <p class="vaz">Vazio</p>
            </section>
            <?php
        }

    }else{
        ?>
            <section>
                <p class="vaz">Vazio</p>
            </section>
        <?php
    }

    include('./layouts/footer.php');