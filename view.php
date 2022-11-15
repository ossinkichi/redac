<head>
    <title>View</title>
    <link rel="stylesheet" href="./css/list.css">
</head>
<?php


    session_start();
    // require('./verify.php');
    
    include('./layouts/header-perfil.php');

    ?>  
        <div class="opt">
            <a href="?freq">Frequencia</a>
            <a href="?not">Notas</a>
        </div>
    <?php

    if(isset($_GET['freq'])){
        
        include('./layouts/prof-lis/frequencia.php');

    }else if(isset($_GET['not'])){

        include('./layouts/prof-lis/notas.php');

    }else{
        ?>
            <section>
                <p class="vaz">Vazio</p>
            </section>
        <?php
    }

    include('./layouts/footer.php');