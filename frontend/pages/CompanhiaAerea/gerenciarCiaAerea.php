<?php include 'modalsCiaAerea.html'; ?>
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
    <table class="table" id="tabela-cAerea">
        <thead>
        <tr>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>Telefone</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
