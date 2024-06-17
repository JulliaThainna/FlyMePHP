<?php
    include_once "../controller/VooController.php";
    include_once "../controller/CompanhiaAereaController.php";
    include_once "../model/Voo.php";

    $ca = new CompanhiaAereaController();
    $vooController = new VooController();
    $voo = new Voo();
    $listCAs = $vooController->getAllCompanhiasAereas();
    $listVoos = $vooController->read();
    
    require "modalsVoo.php"; 
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
        <tbody>
            <?php foreach($listVoos as $voo) : ?>           
                <tr>
                    
                    <td><?= $voo->getOrigem() ?></td>
                    <td><?= $voo->getDestino() ?></td>
                    <td><?= $voo->getDataHorario() ?></td>
                    <td><?= $voo->getDuracao() ?></td>
                    <td><?= $voo->getAssentos() ?></td>
                    <td><?= $voo->getValor() ?></td>
       
                    <td class="px-3">
                        <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editarVoo">   
                            Editar
                        </button>
                        <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-deletarVoo">Deletar</button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody> 
    </table>
    </div>