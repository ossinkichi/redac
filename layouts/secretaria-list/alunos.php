<div class="list">
    <table>
        <thead>
            <tr>
                <th class="row" scope="row">#</th>
                <th scope="col">Matricula</th>
                <th scope="col">Nome</th>
                <th scope="col">Nascimento</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">serie</th>
                <th scope="col">Curso</th>
                <th scope="col">Turno</th>
                <th scope="col">Sala</th>
                <th scope="col">Situação</th>
                <th scope="col">Presenças</th>
                <th scope="col">Faltas</th>
                <th class="row" scope="row">1° Unid</th>
                <th class="row" scope="row">2° Unid</th>
                <th class="row" scope="row">3° Unid</th>
                <th class="row" scope="row">Config</th>
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
                            <td style="text-align: center;" colspan="15">Nenhuma dado encontrada</td>
                        <?php
                    }else{

                        for($i = 0; $i < $tam; $i++){
                            
                            ?>
                                <td class="row" scope="row"><?=$i?></td>
                            <?php
                            foreach($lista[$i] as $collum=>$value){
                                if($collum != 'cargo'){

                                    ?>
                                        <td scope="col"><?=$value?></td>
                                    <?php

                                }
                            }
                            ?>
                                <td><a href="./edit.php?editalu=<?=$lista[$i]['matricula']?>"><img src="./assets/icons/edit-3.png" alt="editar"></a></td>
                            </tr>
                            <?php
                        }
                    }

                ?>
        </tbody>    
    </table>    
</div>
