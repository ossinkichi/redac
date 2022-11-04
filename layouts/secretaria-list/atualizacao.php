<div class="cad">
    <?php

        if(isset($_GET['editturm'])){
            
            $id = addslashes($_GET['editturm']);
            $dados = $b->bUpdateTurmas($id)

    ?>


        <form action="" method="post">
            <h2>Turma</h2>
            <input type="text" placeholder="Ano escolar" name="ano" autocomplete="off" value="<?=$dados['ano']?>">
            <input type="text" placeholder="sala" name="sala" autocomplete="off" value="<?=$dados['turma']?>">
            <input type="text" placeholder="turno" name="turno" autocomplete="off" value="<?=$dados['turno']?>">
            <button type="submit">Atualizar</button>
        </form>

        <?php
                if(isset($_POST['ano'])){

                    $ano = $_POST['ano'];
                    $turma = $_POST['sala'];
                    $turno = $_POST['turno'];

                    $opt->editTurmas($ano,$turma,$turno,$id);
                }
            }else if(isset($_GET['editprof'])){

                $id = addslashes($_GET['editprof']);
                $dados = $b->bUpdateProfessor($id);
        ?>

        <form action="" method="post">

            <h2>Professor</h2>

            <input type="text" placeholder="Nome" name="name" autocomplete="off"  value="<?=$dados['nome']?>">
            <input type="text" placeholder="Materia" name="mater" autocomplete="off" value="<?=$dados['materia']?>">
            <input type="date" placeholder="Ano de nascimento" name="nasc" autocomplete="off" value="<?=$dados['nascimento']?>">
            <input type="tel" name="telefone" placeholder="Telefone" value="<?=$dados['telefone']?>">
            <input type="password" placeholder="Senha" name="pass" autocomplete="off" value="<?=$dados['senha']?>">
            <button type="submit">Atualizar</button>

        </form>

        <?php
            if(isset($_POST['name'])){
                $name = $_POST['name'];
                $materia = $_POST['mater'];
                $nascimento = $_POST['nasc'];
                $telefone = $_POST['telefone'];
                $pass = $_POST['pass'];

                $opt->editProf($name,$nascimento,$telefone,$materia,$pass,$id);
            }

            }else if(isset($_GET['editalu'])){
                
                $id = addslashes($_GET['editalu']);
                $dados = $b->bUpdateAlunos($id);
        ?>

        <form action="" method="post">

            <h2>Alunos</h2>

            <input type="text" placeholder="Número de matricula" name="matric" autocomplete="off" value="<?=$dados['matricula']?>">
            <input type="text" placeholder="Nome" name="name" autocomplete="off" value="<?=$dados['nome']?>">
            <input type="date" placeholder="Ano de nascimento" name="nasc" autocomplete="off" value="<?=$dados['nascimento']?>">
            <input type="number" placeholder="Ano escolar" name="ano" autocomplete="off" value="<?=$dados['ano']?>">
            <input type="text" placeholder="Curso" name="curso" autocomplete="off" value="<?=$dados['curso']?>">
            <input type="text" placeholder="turno" name="turn" autocomplete="off" value="<?=$dados['turno']?>">
            <input type="text" placeholder="sala" name="sal" autocomplete="off" value="<?=$dados['turma']?>">
            <select name="form" id="">
                <option value="0">não</option>
                <option value="1">sim</option>
            </select>
            <input type="password" placeholder="Senha" name="pass"  value="<?=$dados['senha']?>">
            <button type="submit">Atualizar</button>

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

                $opt->editAluno($matricula,$name,$nascimento,$ano,$curso,$turno,$sala,$form,$senha,$id);
            }
            }else{}
        ?>
    </div>

