<section>
    <div class="list">
        <table>
            <thead>
                <tr>
                    <th class="row" scope="col">#</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">1°</th>
                    <th scope="col">2°</th>
                    <th scope="col">3°</th>
                    <th scope="col">4°</th>
                    <th scope="col">5°</th>
                    <th scope="col">6°</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php   
                        $quant = count($dados);
                        for($i = 0; $i < $quant; $i++){
                    ?>
                    <td class="row" scope="row"><?=$i?></td>
                    <td><?=$dados[$i]['matricula']?></td>
                    <td><?=$dados[$i]['nome']?></td>
                    <form action="" method="post">
                        <td class="center row"><input type="checkbox" name="aula_1" value="40"></td>
                        <td class="center row"><input type="checkbox" name="aula_2" value="40"></td>
                        <td class="center row"><input type="checkbox" name="aula_3" value="40"></td>
                        <td class="center row"><input type="checkbox" name="aula_4" value="40"></td>
                        <td class="center row"><input type="checkbox" name="aula_5" value="40"></td>
                        <td class="center row"><input type="checkbox" name="aula_6" value="40"></td>
                </tr>
                <?php $mat = $dados[$i]['matricula']; ?>
            </tbody>
            <?php } ?>
            <tr>
                <td colspan="9"><button type="submit">Enviar</button></td>
                </form>
            </tr>
        </table>
    </div>
</section>

<?php
    if(isset($_POST['seg'])){
            
        
        $aula_1 = addslashes($_POST['aula_1']);
        $aula_2 = addslashes($_POST['aula_2']);
        $aula_3 = addslashes($_POST['aula_3']);
        $aula_4 = addslashes($_POST['aula_4']);
        $aula_5 = addslashes($_POST['aula_5']);
        $aula_6 = addslashes($_POST['aula_6']);

        //$f->setFreq($mat,$seg,$ter,$qua,$qui,$sex);
        
    }

?>