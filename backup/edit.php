<?php

    require_once('./config/opt.php');
    require_once('./config/busca.php');
    require('./var.php');

    $b = new busca($dbname,$host,$usuario,$senha);
    $opt = new option($dbname,$host,$usuario,$senha);


    include('./layouts/header-perfil.php');

    ?>
    <style>
        .cad form{
            border: 1px solid;
            border-radius: 5px;

            display: flex;
            flex-direction: column;
            justify-content: space-around;
            gap: 3px;

            height: 400px;
            width: 350px;

            padding: 15px;
            margin: 0 auto;
        }

        .cad form>select{
            border: none;
            border-bottom: 1px solid;
        }

        .cad form>input{
            padding: 5px  7px;
        }

        .cad form>button{
            padding: 5px;

            cursor: pointer;
        }
    </style>

    <section>
    <?php
    require('./layouts/secretaria-list/atualizacao.php');
    ?></section><?php

    include('./layouts/footer.php');