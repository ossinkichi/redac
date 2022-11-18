<section>
    <div class="list">
        <table>
            <thead>
                <tr>
                    <th class="row" scope="col">#</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">S</th>
                    <th scope="col">T</th>
                    <th scope="col">Q</th>
                    <th scope="col">Q</th>
                    <th scope="col">S</th>
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
                        <td class="center"><input type="text" name="seg" value="<?=$dados[$i]['segunda']?>"></td>
                        <td class="center"><input type="text" name="ter" value="<?=$dados[$i]['terca']?>"></td>
                        <td class="center"><input type="text" name="qua" value="<?=$dados[$i]['quarta']?>"></td>
                        <td class="center"><input type="text" name="qui" value="<?=$dados[$i]['quinta']?>"></td>
                        <td class="center"><input type="text" name="sex" value="<?=$dados[$i]['sexta']?>"></td>
                </tr>
                <?php $mat = $dados[$i]['matricula']; ?>
            </tbody>
            <?php } ?>
            <tr>
                <td colspan="8"><button type="submit">Enviar</button></td>
                </form>
            </tr>
        </table>
    </div>
</section>

<?php
    if(isset($_POST['seg'])){
            
        
        $seg = addslashes($_POST['seg']);
        $ter = addslashes($_POST['ter']);
        $qua = addslashes($_POST['qua']);
        $qui = addslashes($_POST['qui']);
        $sex = addslashes($_POST['sex']);

        $f->setFreq($mat,$seg,$ter,$qua,$qui,$sex);
        
    }

?>