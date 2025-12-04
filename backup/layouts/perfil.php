<?php
    $array = explode(' ',$user);

    /*
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    */
?>


    <style>
        section{
            flex: 1;
            margin: 35px auto;

            width: 100%;

            /* border: 1px solid; */
        }

        .apresentacao{
            width: 80%;
            height: 100%;

            position: relative;
        }

        .user{
            border-bottom: 1px solid;

            width: 120px;

            display: flex;
            flex-direction: row;

            margin-top: 15px;
            margin-left: 22px;
        }

        .user img{
            width: 17px;
            height: 17px;

            margin-right: 7px;
            margin-left: 8px;
        }

        .card{
            border: 1px solid;
            border-radius: 2px;

            width: 270px;
            height: 140px;
        }

        .bg{
            background-color: blue;

            width: 100%;
            height: 50%;

            border-bottom: 1px solid;
        }

        .card p{
            font-size: 26px;

            margin-top: 5px;
            margin-left: 190px;
        }

        .links{
            width: 90%;

            margin-left: 75px;
        }

        .links a{
            margin-left: 25px;
            padding: 5px 7px;

            background-color: dimgray;
            color: white;
            
            text-decoration-line: none;

            border-radius: 2px;
        }

        .classes{
            margin-top: 175px;
        }
    </style>

    <section class="apresentacao">
        <div class="user">
            <img src="./assets/icons/user.png" alt="">
            <p class="name"><?=$array[0] ?? 'Nome de usuario' ?></p>
            <?php if($_SESSION['cargo'] == 'professor'){ ?>
            <p class="mater">Materia</p>
            <?php }else if($_SESSION['cargo'] == 'aluno'){ ?>
            <p class="mater"><?=$_SESSION['turma'] ?? ''?></p>
            <?php }else{} ?>
        </div>

        <!-- <div class="links">
            <a href="view.php?tela=not">Notas</a>
            <a href="view.php?tela=fre">Frequencia</a>
        </div> -->
    </section>

    <section class="classes">
                <?php
                    /*
                    if($_SESSION['cargo'] == 'Alunos'){
                        $lista = $b->bUpdateAlunos($_SESSION['id']);
                            ?>
                                <div class="card">
                                    <div class="bg"></div>
                                    <p>3ºTIM1</p>
                                </div>
                            <?php
                     }else{}
                    */
                ?>

                

        
    </section>
