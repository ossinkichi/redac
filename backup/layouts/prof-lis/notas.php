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
                    <th scope="col">1° UND</th>
                    <th scope="col">1°</th>
                    <th scope="col">2°</th>
                    <th scope="col">3°</th>
                    <th scope="col">2° UND</th>
                    <th scope="col">1°</th>
                    <th scope="col">2°</th>
                    <th scope="col">3°</th>
                    <th scope="col">3° UND</th>
                    <th scope="col">Final</th>
                    <th scope="col">Salva</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $quant = count($dados);
                        if($quant == 0){
                            echo '<tr>
                                <td class="center" colspan="18">Nenhum dado encontrado</td>
                            </tr>';
                        }else{
                        for($i = 0; $i < $quant; $i++){
                    ?>
                    <td class="row" scope="row"><?=$i?></td>
                    <td><?=$dados[$i]['matricula']?></td>
                    <td><?=$dados[$i]['nome']?></td>
                    <td class="center"><input type="text" value="0" name="atv1"></td>
                    <td class="center"><input type="text" value="0" name="atv2"></td>
                    <td class="center"><input type="text" value="0" name="atv3"></td>
                    <td class="center"><p>0</p></td>
                    <td class="center"><input type="text" value="0" name="atv4"></td>
                    <td class="center"><input type="text" value="0" name="atv5"></td>
                    <td class="center"><input type="text" value="0" name="atv6"></td>
                    <td class="center"><p>0</p></td>
                    <td class="center"><input type="text" value="0" name="atv7"></td>
                    <td class="center"><input type="text" value="0" name="atv8"></td>
                    <td class="center"><input type="text" value="0" name="atv9"></td>
                    <td class="center"><p>0</p></td>
                    
                    <td class="center"><p>0</p></td>
                    <td scope="row" class="row"><button style="margin: auto; padding: 1px 12px;" type="submit">Salvar</button></td>
                </tr>
                <?php } } ?>
            </tbody>
        </table>
    </div>
</section>