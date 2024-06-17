<?php 
    require "modalsVoo.php"; 
    require "../controller/VooController.php";
?>

<div class="tab-pane fade show active" id="tab1">
    <div class="container d-flex justify-content-end">
        <button type="button" class="btn m-3" data-bs-toggle="modal" data-bs-target="#modal-cadastrarVoo">
            <i class="bi bi-plus-lg" style="color: #ffffff;"></i>
            Adicionar novo voo
        </button>
        <!-- <button type="button" class="btn m-3 botao-danger" data-bs-toggle="modal" data-bs-target="#modal-deletarTodosVoos">
            <i class="bi bi-trash-fill" style="color: #ffffff;"></i>
            Deletar todos os voos
        </button> -->
    </div>
    <table class="table" id="tabela-voos">
        <thead>
        <tr>
            <th>Companhia aérea</th>
            <th>Origem</th>
            <th>Destino</th>
            <th>Data/Horário</th>
            <th>Duração (em horas)</th>
            <th>Assentos</th>
            <th>Valor</th>
            <th>Ações</th>
            <!-- <th>Classe</th> -->    
        </tr>
        </thead>
        <!-- <tbody>
            <?php
                if($resultado){
                    while($linha = mysqli_fetch_assoc($resultado)){
                        $id = $linha['id'];
                        $origem = $linha['origem'];
                        $destino = $linha['destino'];
                        $data_horario = $linha['data_horario'];
                        $duracao = $linha['duracao'];
                        $assentos = $linha['assentos'];
                        $valor = $linha['valor'];
                        echo "<tr>
                            <th scope='row'> $id </th>
                            <td>$origem</td>
                            <td>$destino</td>
                            <td>$data_horario</td>
                            <td>$duracao</td>
                            <td>$assentos</td>
                            <td>$valor</td>
                        </tr>";
                    }
                }
            ?>
        </tbody> -->
    </table>
    </div>