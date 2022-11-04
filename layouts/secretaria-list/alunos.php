<div class="list">
    <table>
        <thead>
            <tr>
                <th class="row" scope="row">#</th>
                <th scope="row">Matricula</th>
                <th scope="col">Nome</th>
                <th scope="col">Nascimento</th>
                <th scope="col">Ano</th>
                <th scope="col">Curso</th>
                <th scope="col">Turno</th>
                <th scope="col">Sala</th>
                <th scope="col">Formado</th>
                <th colspan="2">Config</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    // ativando a configuração de busca de dados                   
                   $lista = $b->alunos();
                   // vendo quantos dados existe
                   $tam = count($lista);

                    if($tam <= 0){
                        ?>
                            <td style="text-align: center;" colspan="10">Nenhuma dado encontrada</td>
                        <?php
                    }else{

                        for($i = 0; $i < $tam; $i++){
                            
                            ?>
                                <td class="row" scope="row"><?=$i?></td>
                            <?php
                            foreach($lista[$i] as $collum=>$value){
                                if($collum != 'id' && $collum != 'cargo' && $collum != 'senha' ){

                                    ?>
                                        <td scope="row"><?=$value?></td>
                                    <?php

                                }
                            }
                            ?>
                                <td><a href="./edit.php?editalu=<?=$lista[$i]['id']?>"><img src="./assets/icons/edit-3.png" alt="editar"></a></td>
                                <td><a href="./delete.php?excluiralu=<?=$lista[$i]['id']?>"><img src="./assets/icons/trash-2.png" alt="excluir"></a></td>
                            </tr>
                            <?php
                        }
                    }

                ?>
        </tbody>    
    </table>    
</div>
