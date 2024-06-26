<?php
    include_once "../controller/VooController.php";
    include_once "../controller/CompanhiaAereaController.php";
    include_once "../model/Voo.php";

    $caVoo = new CompanhiaAereaController();
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
                    <td><?= $caVoo->getCaById($voo->getCompanhiaAereaId()) ?></td>
                    <td><?= $voo->getOrigem() ?></td>
                    <td><?= $voo->getDestino() ?></td>
                    <td><?= $voo->getDataHorario() ?></td>
                    <td><?= $voo->getDuracao() ?></td>
                    <td><?= $voo->getAssentos() ?></td>
                    <td><?= $voo->getValor() ?></td>
       
                    <td class="px-3">
                        <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editarVoo"
                            onclick="document.getElementById('edit-id').value='<?= $voo->getId() ?>';
                             document.getElementById('edit-companhia-aerea-id').value='<?= $voo->getCompanhiaAereaId() ?>';
                             document.getElementById('edit-origem').value='<?= $voo->getOrigem() ?>';
                             document.getElementById('edit-destino').value='<?= $voo->getDestino() ?>';
                             document.getElementById('edit-data-horario').value='<?= $voo->getDataHorario() ?>';
                             document.getElementById('edit-duracao').value='<?= $voo->getDuracao() ?>';
                             document.getElementById('edit-assentos').value='<?= $voo->getAssentos() ?>';
                             document.getElementById('edit-valor').value='<?= $voo->getValor() ?>';
                        ">
                            Editar
                        </button>
                        <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-deletarVoo" onclick="document.getElementById('delete-id-voo').value='<?= $voo->getId() ?>'">Deletar</button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody> 
    </table>
    </div>