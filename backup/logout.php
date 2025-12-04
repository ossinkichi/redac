<?php

    // iniciando uma sessão
    session_start();

    //verificando se existe uma sessão aberta
    if(isset($_SESSION)){
        // destruindo ela
        session_destroy();

        header('location: ./index.php');
    }