<?php
    require_once('./config/cadastro.php');
    require_once('./config/busca.php');
    require_once('./var.php');

    include('./layouts/header-perfil.php');

    // iniciando uma sessão
    session_start();
    //verificando se existe uma id de usuario salva e validá
    require('./verify.php');

        // ativando as configuraçôes
            #cadasto
        $c = new cadastro($dbname,$host,$usuario,$senha);
            #busca
        $b = new busca($dbname,$host,$usuario,$senha);

?>

    <style>
        /* nav - bar */
        nav{
            display: flex;
            flex-direction: row;
        }

        nav img{
            margin: 15px 0;
            margin-left: 50px;

            width: 50px;
            height: 50px;
        }

        nav h1{
            margin-left: 15px;
            margin-top: 30px;
        }

        /* perfil */
        .container{
            border-radius: 2px;

            width: 30%;
            height: 370px;
        }

        .user{
            border: none;
        }

        .name{
            text-decoration-line: underline;
        }

        /* lista  de dados */
        .links{
            height: auto;
            width: 250px;

            border: 1px solid;

            background: #808060;

            margin: 15px 25px;
        }

        .links a{
            display: block;

            padding: 15px;
            margin-top: 5px;

            color: #000;
            border-bottom: 1px solid;

            text-decoration: none;
        }

        .secret{
            display: flex;
            flex-direction: row;
        }

        .list{
            width: 70%;
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
            padding: 2px 12px;
        }

        td img{
            width: 20px;
            height: 20px;
        }

        td a{
            text-align: center;

            padding: 0;
            border: none;

            display: block;
        }

        /* fomularios de cadastro */
        .cad{
            width: 70%;
            height: 100%;

            display: flex;
            flex-direction: column;
            gap: 25px;

            padding: 15px;
        }

        .modo{
            border: 1px solid;

            width: 100%;
            height: 35px;


            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .modo a{
            text-decoration-line: none;

            padding: 12px;

            color: #000;
        }

        .modo a:hover{
            color: blue;

            text-decoration-line: underline;
        }

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

    <section class="secret">
        <div class="container">
            <div class="user">
                <img src="./assets/icons/user.png" alt="">
                <p class="name"><?=$_SESSION['nome']?></p>
            </div>
            <div class="links">
                <a href="?modo=turmas">Turmas</a>
                <a href="?modo=professores">Professores</a>
                <a href="?modo=alunos">Alunos</a>
                <a href="?cadastro=">Cadastrar</a>
            </div>
            </p>
        </div>
        
        <?php
            // verificando se na url exites um elemento chamado modo e se seu valor é turmas
            if(isset($_GET['modo']) && $_GET['modo'] == 'turmas'){

                include('./layouts/secretaria-list/turma.php');

            // verificando se na url exites um elemento chamado modo e se seu valor é professores
            }else if(isset($_GET['modo']) && $_GET['modo'] == 'professores'){

                include('./layouts/secretaria-list/profesores.php');

            // verificando se na url exites um elemento chamado modo e se seu valor é alunos
            }elseif(isset($_GET['modo']) && $_GET['modo'] == 'alunos'){

                include('./layouts/secretaria-list/alunos.php');

            // verificando se na url exites um elemento chamado cadastro 
            }elseif(isset($_GET['cadastro'])){

                include('./layouts/secretaria-list/cadastro.php');

            }else{
                // se não existir não faz nada
            }
        ?>
    </section>

<?php
        include('./layouts/footer.php');
?>