<div class="list">
    <table>
        <thead>
            <tr>
                <th class="row" scope="row">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Nascimento</th>
                <th scope="col">Materia</th>
                <th scope="col">Telefone</th>
                <th colspan="2">Config</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    // ativando a configuração de busca de dados
                    $lista = $b->professor();

                    // vendo quantos dados existe
                    $tam = count($lista);

                    if($tam <= 0){
                        ?>
                            <td style="text-align: center;" colspan="6">Nenhuma dado encontrada</td>
                        <?php
                    }else{

                        for($i = 0; $i < $tam;$i++){
                            ?>
                                <td class="row" scope="row"><?=$i?></td>
                            <?php

                            foreach($lista[$i] as $collun=>$value){

                                if($collun != 'id' && $collun != 'cargo' && $collun != 'senha'){

                                    ?>
                                        <td scope="row"><?=$value?></td>
                                    <?php

                                }

                            }

                            ?>
                                <td><a href="./edit.php?editprof=<?=$lista[$i]['id']?>"><img src="./assets/icons/edit-3.png" alt="editar"></a></td>
                                <td><a href="./delete.php?excluirprof=<?=$lista[$i]['id']?>"><img src="./assets/icons/trash-2.png" alt="excluir"></a></td>
                            </tr>   
                            <?php
                        }
                    }
                ?>
        </tbody>    
    </table>
</div>
