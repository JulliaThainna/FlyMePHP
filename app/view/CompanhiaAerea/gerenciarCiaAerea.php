<?php 
    require '../controller/CompanhiaAereaController.php';
    require 'modalsCiaAerea.html';

    $ca = new CompanhiaAereaController();
    $listCAs = $ca->read();
?>

<div class="tab-pane fade show active" id="tab2">
    <div class="container d-flex justify-content-end">
        <button type="button" class="btn m-3" data-bs-toggle="modal" data-bs-target="#modal-adicionarCA">
        <i class="bi bi-plus-lg" style="color: #ffffff;"></i>
        Adicionar nova Companhia Aérea
        </button>
        <button type="button" class="btn m-3 botao-danger" data-bs-toggle="modal" data-bs-target="#modal-deletarTodasCA">
        <i class="bi bi-trash-fill" style="color: #ffffff;"></i>
        Deletar todas as Companhias Aéreas
        </button>
    </div>
    <table class="table" id="tabela-ca">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($ca->read() as $ca) : ?>
                <tr>
                    <td><?= $ca->getId() ?></td>
                    <td><?= $ca->getNome() ?></td>
                    <td><?= $ca->getCnpj() ?></td>
                    <td><?= $ca->getEndereco() ?></td>
                    <td><?= $ca->getTelefone() ?></td>
                    <td>
                        <a href="../controller/CompanhiaAereaController.php?del=<?= $ca->getId() ?>">
                            <button class="btn btn-sm" type="button">Excluir</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
