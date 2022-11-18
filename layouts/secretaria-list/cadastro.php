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
        <input type="text" placeholder="Serie" name="ano" autocomplete="off">
        <input type="text" placeholder="Curso" name="curso" autocomplete="off">
        <input type="text" placeholder="Turno" name="turno" autocomplete="off">
        <input type="text" placeholder="Sala" name="sala" autocomplete="off">
        <button type="submit">Cadastrar</button>
    </form>

    <?php
            if(isset($_POST['ano'])){

                $ano = addslashes($_POST['ano']);
                $turno = addslashes($_POST['turno']);
                $curso = addslashes($_POST['curso']);
                $turma = addslashes($_POST['sala']);

                echo $c->turmas($ano,$turno,$curso,$turma);
            }
        }else if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'cad-professores'){
    ?>

    <form action="" method="post">

        <h2>Professor</h2>

        <input type="text" placeholder="Nome" name="name" autocomplete="off">
        <input type="date" placeholder="Ano de nascimento" name="nasc" autocomplete="off">
        <input type="text" placeholder="Materia" name="mater" autocomplete="off">
        <input type="tel" name="telefone" placeholder="Telefone">
        <input type="email" placeholder="Email" name="mail" autocomplete="off">
        <button type="submit">Cadatrar</button>

    </form>

    <?php
        if(isset($_POST['name'])){
            $name = addslashes($_POST['name']);
            $nascimento = addslashes($_POST['nasc']);
            $materia = addslashes($_POST['mater']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['mail']);

            echo $c->professor($name,$nascimento,$materia,$telefone,$email);
        }

        }else if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'cad-alunos'){
    ?>

    <style>
        .cad form{
            height: 34.375rem;

            gap: .75rem;
        }
    </style>

    <form action="" method="post">

        <h2>Alunos</h2>

        <input type="text" placeholder="Número de matricula" name="matric" autocomplete="off">
        <input type="text" placeholder="Nome" name="name" autocomplete="off">
        <input type="date" placeholder="Ano de nascimento" name="nasc" autocomplete="off">
        <input type="number" placeholder="Serie" name="ano" autocomplete="off">
        <input type="text" placeholder="Curso" name="curso" autocomplete="off">
        <input type="text" placeholder="Turno" name="turn" autocomplete="off">
        <input type="text" placeholder="Sala" name="sal" autocomplete="off">
        <input type="text" placeholder="Turma" name="turm" autocomplete="off">
        <input type="tel" placeholder="Telefone" name="tel" autocomplete="off">
        <input type="email" placeholder="Email" name="mail" autocomplete="off">
        <input type="text" name="sit" placeholder="Situação" autocomplete="off">
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
            $turma = addslashes($_POST['turm']);
            $telefone = addslashes($_POST['tel']);
            $email = addslashes($_POST['mail']);
            $sit = addslashes($_POST['sit']);

            echo $c->aluno($matricula,$name,$nascimento,$ano,$curso,$turno,$sala,$email,$telefone,$sit);

            $c->freq($matricula,$name,$turma);
            $c->nota($matricula,$name,$turma);
        
        }
        }else{}
    ?>
</div>
