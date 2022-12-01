<?php 
    session_start();
    if(!isset($_SESSION['id'])){
?>
<title>Login</title>
<?php
    require_once('./config/login.php');
    require_once('./var.php');

    // chamando a config. de login
    $l = new login($dbname,$host,$usuario,$senha);

    include('./layouts/header-login.php');

    include('./layouts/login.php');

    // verificando se algum dado foi enviado
    if(isset($_POST['cargo']) && isset($_POST['name'])){
       // verificando se nenhum dos campos estão vazios
        if(empty($_POST['cargo']) || empty($_POST['name'])){
            echo "<p style ='background: yellow; widht: 100vw; padding: 12px; border: 1px solid;'>Por favor insira todos os dados</p>";
        }else{

            // salvamento de dados temporariamente
            $cargo = addslashes($_POST['cargo']);
            $name = addslashes($_POST['name']);
            $password  = addslashes($_POST['pass']);

            switch ($cargo){

                case "admin":
                    // ativando a configuração de login
                    $dados = $l->admin($name,$password);
                
                    session_start();
                    $_SESSION['id'] = $dados['id'];
                    $_SESSION['nome'] = $dados['nome'];
                    $_SESSION['cargo'] = $dados['cargo'];
                break;

                case "professor":
                    // ativando a configuração de login                    
                    $dados = $l->prof($name,$password);

                    session_start();
                    $_SESSION['id'] = $dados['id'];
                    $_SESSION['nome'] = $dados['nome'];
                    $_SESSION['cargo'] = $dados['cargo'];
                    
                    //echo '<p style="background: red; padding: 5px;">Modo professor não disponivel</p>';
                break;

                case "aluno":
                    // ativando a configuração de login
                    $dados = $l->aluno($name);

                    session_start();
                    $_SESSION['id'] = $dados['matricula'];
                    $_SESSION['nome'] = $dados['nome'];
                    $_SESSION['cargo'] = $dados['cargo'];
                    $_SESSION['turma'] = $dados['turma'];
                break;

                default :
                    echo "<p style ='background: red; widht: 100vw; padding: 12px; border: 1px solid;'>Usuario ou senha incorretos</p>";
                break;

            }

        }

    }

    include('./layouts/footer.php');
}else{
    if($_SESSION['cargo'] == 'admin'){
        header('location: secret.php');
    }else if($_SESSION['cargo'] == 'aluno' || $_SESSION['cargo'] == 'professor'){
        header('location: perfil.php');
    }
}