<?php

    session_start();

    // require('./verify.php');

    require_once('./config/busca.php');
    require('./var.php');

    $b = new busca($dbname,$host,$usuario,$senha);



        $user = $_SESSION['nome'];
        $cargo = $_SESSION['cargo'];

        include('./layouts/header-perfil.php');

        include('./layouts/perfil.php');

        include('./layouts/footer.php');
        
