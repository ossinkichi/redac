<div class="cad">
    <?php

        if(isset($_GET['editturm'])){
            
            $id = addslashes($_GET['editturm']);
            $dados = $b->bUpdateTurmas($id)

    ?>


        <form action="" method="post">
            <h2>Turma</h2>
            <input type="text" placeholder="Ano escolar" name="ano" autocomplete="off" value="<?=$dados['serie']?>">
            <input type="text" placeholder="Serie" name="curso" autocomplete="off" value="<?=$dados['curso']?>">
            <input type="text" placeholder="turno" name="turno" autocomplete="off" value="<?=$dados['turno']?>">
            <input type="text" placeholder="sala" name="sala" autocomplete="off" value="<?=$dados['sala']?>">
            <button type="submit">Atualizar</button>
        </form>

        <?php
                if(isset($_POST['ano'])){

                    $ano = $_POST['ano'];
                    $cur = $_POST['curso'];
                    $turno = $_POST['turno'];
                    $turma = $_POST['sala'];

                    $opt->editTurmas($ano,$turno,$cur,$turma,$id);
                }
            }else if(isset($_GET['editprof'])){

                $id = addslashes($_GET['editprof']);
                $dados = $b->bUpdateProfessor($id);
        ?>

        <form action="" method="post">

            <h2>Professor</h2>

            <input type="text" placeholder="Nome" name="name" autocomplete="off"  value="<?=$dados['nome']?>">
            <input type="date" placeholder="Ano de nascimento" name="nasc" autocomplete="off" value="<?=$dados['nascimento']?>">
            <input type="text" placeholder="Materia" name="mater" autocomplete="off" value="<?=$dados['materia']?>">
            <input type="tel" name="telefone" placeholder="Telefone" value="<?=$dados['telefone']?>">
            <input type="tel" name="mail" placeholder="Email" value="<?=$dados['email']?>">
            
            <button type="submit">Atualizar</button>

        </form>

        <?php
            if(isset($_POST['name'])){
                $name = addslashes($_POST['name']);
                $nascimento = addslashes($_POST['nasc']);
                $materia = addslashes($_POST['mater']);
                $telefone = addslashes($_POST['telefone']);
                $email = addslashes($_POST['mail']);

                $opt->editProf($name,$nascimento,$materia,$telefone,$email,$id);
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
            <input type="number" placeholder="Ano escolar" name="ano" autocomplete="off" value="<?=$dados['serie']?>">
            <input type="text" placeholder="Curso" name="curso" autocomplete="off" value="<?=$dados['curso']?>">
            <input type="text" placeholder="turno" name="turn" autocomplete="off" value="<?=$dados['turno']?>">
            <input type="number" placeholder="sala" name="sal" autocomplete="off" value="<?=$dados['turma']?>">
            <input type="tel" placeholder="Telefone" name="tel" autocomplete="off" value="<?=$dados['telefone']?>">
            <input type="email" placeholder="Email" name="mail" autocomplete="off" value="<?=$dados['email']?>">
            <input type="text" name="sit" placeholder="Situação" autocomplete="off" value="<?=$dados['situacao']?>">
            <button type="submit">Atualizar</button>

        </form>

        <?php
            if(isset($_POST['matric'])){
                $matricula = addslashes($_POST['matric']);
                $name = addslashes($_POST['name']);
                $nascimento = addslashes($_POST['nasc']);
                $ano = addslashes($_POST['ano']);
                $curso = addslashes($_POST['curso']);
                $turno = addslashes($_POST['turn']);
                $sala = addslashes($_POST['sal']);
                $telefone = addslashes($_POST['tel']);
                $email = addslashes($_POST['mail']);
                $sit = addslashes($_POST['sit']);

                $opt->editAluno($matricula,$name,$nascimento,$ano,$curso,$turno,$sala,$email,$telefone,$sit,$id);
            }
            }else{}
        ?>
    </div>

