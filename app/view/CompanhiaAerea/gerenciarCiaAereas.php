<?php 
    include_once "modalsCiaAerea.php";
    include_once "../controller/CompanhiaAereaController.php";

    $ca = new CompanhiaAereaController();
    $listCAs = $ca->read();
?>

<div class="tab-pane fade show active" id="tab2">
    <div class="container d-flex justify-content-end">
        <button type="button" class="btn m-3" data-bs-toggle="modal" data-bs-target="#modal-cadastrarCa">
            <i class="bi bi-plus-lg" style="color: #ffffff;"></i>
            Adicionar nova Companhia Aérea
        </button>
        <!-- <button type="button" class="btn m-3 botao-danger" data-bs-toggle="modal" data-bs-target="#modal-deletarTodasCA">
        <i class="bi bi-trash-fill" style="color: #ffffff;"></i>
        Deletar todas as Companhias Aéreas
        </button> -->
    </div>
    <table class="table" id="tabela-ca">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Cnpj</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            <th scope="col" style="padding-left: 5%;">Ações</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($listCAs as $ca) : ?>
                <tr>
                    <td><?= $ca->getNome() ?></td>
                    <td><?= $ca->getCnpj() ?></td>
                    <td><?= $ca->getEndereco() ?></td>
                    <td><?= $ca->getTelefone() ?></td>
                    <td class="px-3">
                        <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editarCa"
                            onclick="document.getElementById('edit-id').value='<?= $ca->getId() ?>';
                             document.getElementById('edit-nome').value='<?= $ca->getNome() ?>';
                             document.getElementById('edit-cnpj').value='<?= $ca->getCnpj() ?>';
                             document.getElementById('edit-endereco').value='<?= $ca->getEndereco() ?>';
                             document.getElementById('edit-telefone').value='<?= $ca->getTelefone() ?>';">
                                
                                Editar
                        </button>
                        <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-deletarCa" onclick="document.getElementById('delete-id-ca').value='<?= $ca->getId() ?>'">Deletar</button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
