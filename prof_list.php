<?php

    include('./layouts/header-perfil.php');
    ?>
        <style>
            .list{
                width: 90%;
            }

            table{
                width: 90%;

                /* border: 1px solid; */
                border-collapse: collapse;

                margin: 15px auto;
            }

            tr{
                line-height: 25px;
            }

            td,
            th{
                border: 1px solid;
                padding: 7px;
            }

            .row{
                text-align: center;
                width: 25px;
            }

            td img{
                width: 20px;
                height: 20px;
            }

            td a{
                text-align: center;

                padding: 0;
                border: none;
            }

            td input{
                width: 45px;
                height: 15px;

                padding: 12px 10px;
            }

        </style>

        <section>
    <?php
    include('./layouts/prof-lis/notas.php');
        ?>
        </section>
        <?php

    include('./layouts/footer.php');