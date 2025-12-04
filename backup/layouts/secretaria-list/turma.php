    <div class="list">
        <table>
            <thead>
                <tr>
                    <th class="row" scope="row">#</th>
                    <th class="row" scope="row">Serie</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Sala</th>
                    <th class="row" scope="row">Config</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        // ativando a configuração de busca de dados                    
                        $lista = $b->turmas();

                        // vendo quantos dados existe
                        $tam = count($lista);

                        if($tam <= 0){
                        ?>
                            <td style="text-align: center;" colspan="6">Nenhuma dado encontrada</td>
                        <?php
                        }else{

                            for($i = 0; $i < $tam; $i++){
                                
                                ?>
                                    <td class="row" scope="row"><?=$i?></td>
                                <?php

                                foreach($lista[$i] as $collum=>$value){
                                    if($collum != 'id'){

                                        ?>
                                            
                                            <td scope="row"><?=$value?></td>
                                        <?php
                                    }
                                }

                                ?>
                                    <td><a href="./edit.php?editturm=<?=$lista[$i]['id']?>"><img src="./assets/icons/edit-3.png" alt="editar"></a></td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                     
            </tbody>    
        </table>
    </div>

