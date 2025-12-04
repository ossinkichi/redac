<style>
    form{
        width: 100%;
        height: 100%;

        padding: 25px;
        margin: 0 auto;

        
        display: flex;
        border: 1px solid;
        /* flex-direction: column; */
        flex-wrap: wrap;
        gap: 17px;
    }

    form input{
        padding: 7px;
        border-bottom: 1px solid #000; 
        border-top: 1px solid #000; 
        border-left: 1px solid #000; 
        border-right: 1px solid #000;
    }

    form button{
        padding: 5px 35px;
        cursor: pointer;
    }
</style>
<div class="list">
    <?php if(isset($_GET['curso']) && $_GET['curso'] == 'cad'){ ?>
    <h3>Curso - Cadastro</h3>
    <form action="" method="post">
        <input type="number" placeholder="Grau" name="grau">
        <input type="text" placeholder="Curso" name="curso">
        <input type="text" placeholder="Materia" name="mat_1">
        <input type="text" placeholder="Materia" name="mat_2">
        <input type="text" placeholder="Materia" name="mat_3">
        <input type="text" placeholder="Materia" name="mat_4">
        <input type="text" placeholder="Materia" name="mat_5">
        <input type="text" placeholder="Materia" name="mat_6">
        <input type="text" placeholder="Materia" name="mat_7">
        <input type="text" placeholder="Materia" name="mat_8">
        <input type="text" placeholder="Materia" name="mat_9">
        <input type="text" placeholder="Materia" name="mat_10">
        <input type="text" placeholder="Materia" name="mat_11">
        <input type="text" placeholder="Materia" name="mat_12">
        <input type="text" placeholder="Materia" name="mat_13">
        <input type="text" placeholder="Materia" name="mat_14">
        <input type="text" placeholder="Materia" name="mat_15">
        <input type="text" placeholder="Materia" name="mat_16">
        
        <button type="submit">Enviar</button>
    </form>
    <?php }else if(isset($_GET['curso'])){ ?>
        <a style="color: #000; text-decoration-line:none;" href="?curso=cad">Curso - Cadastro</a>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Grau</th>
                    <th>Curso</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <?php
                        $dados = $b->curso();

                        $tam = count($dados);

                        if($tam == 0){
                            echo '<td colspan="3" style="text-align: center;">Nenhum dado encontrado</td>';
                        }else{
                            echo '<pre>';
                            print_r($dados);
                            echo '</pre>';
                        }
                    ?>
                    
                </tr>
            </tbody>
        </table>
    <?php }else{} ?>
</div>
    
