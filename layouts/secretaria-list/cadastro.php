<div class="cad">
    <div class="modo">
        <a href="?cadastro=cad-turma">Turmas</a>
        <a href="?cadastro=cad-professores">Professores</a>
        <a href="?cadastro=cad-alunos">Alunos</a>
    </div>

    <?php

        if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'cad-turma'){

    ?>

    <form action="" method="post">
        <h2>Turma</h2>
        <input type="text" placeholder="Ano escolar" name="ano" autocomplete="off">
        <input type="text" placeholder="sala" name="sala" autocomplete="off">
        <input type="text" placeholder="turno" name="turno" autocomplete="off">
        <button type="submit">Cadastrar</button>
    </form>

    <?php
            if(isset($_POST['ano'])){

                $ano = $_POST['ano'];
                $turma = $_POST['sala'];
                $turno = $_POST['turno'];

                $c->turmas($ano,$turma,$turno);
            }
        }else if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'cad-professores'){
    ?>

    <form action="" method="post">

        <h2>Professor</h2>

        <input type="text" placeholder="Nome" name="name" autocomplete="off">
        <input type="text" placeholder="Materia" name="mater" autocomplete="off">
        <input type="date" placeholder="Ano de nascimento" name="nasc" autocomplete="off">
        <input type="tel" name="telefone" placeholder="Telefone">
        <input type="password" placeholder="Senha" name="pass" autocomplete="off">
        <button type="submit">Cadatrar</button>

    </form>

    <?php
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $materia = $_POST['mater'];
            $nascimento = $_POST['nasc'];
            $telefone = $_POST['telefone'];
            $pass = $_POST['pass'];

            $c->professor($name,$nascimento,$telefone,$materia,$pass);
        }

        }else if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'cad-alunos'){
    ?>

    <form action="" method="post">

        <h2>Alunos</h2>

        <input type="text" placeholder="Número de matricula" name="matric" autocomplete="off">
        <input type="text" placeholder="Nome" name="name" autocomplete="off">
        <input type="date" placeholder="Ano de nascimento" name="nasc" autocomplete="off">
        <input type="number" placeholder="Ano escolar" name="ano" autocomplete="off">
        <input type="text" placeholder="Curso" name="curso" autocomplete="off">
        <input type="text" placeholder="turno" name="turn" autocomplete="off">
        <input type="text" placeholder="sala" name="sal" autocomplete="off">
        <select name="form" id="">
            <option value="0">não</option>
            <option value="1">sim</option>
        </select>
        <input type="password" placeholder="Senha" name="pass">
        <button type="submit">Cadatrar</button>

    </form>

    <?php
        if(isset($_POST['name'])){
            $matricula = addslashes($_POST['matric']);
            $name = addslashes($_POST['name']);
            $nascimento = addslashes($_POST['nasc']);
            $ano = addslashes($_POST['ano']);
            $curso = addslashes($_POST['curso']);
            $turno = addslashes($_POST['turn']);
            $sala = addslashes($_POST['sal']);
            $form = addslashes($_POST['form']);
            $senha = addslashes($_POST['pass']);

            switch($form){

                case "não":
                    $form = "não";
                break;

                case "sim":
                    $form = "sim";
                break;
            }

            $c->aluno($matricula,$name,$nascimento,$ano,$curso,$turno,$sala,$form,$senha);
        }
        }else{}
    ?>
</div>
