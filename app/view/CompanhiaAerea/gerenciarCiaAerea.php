<?php require 'modalsCiaAerea.html'; ?>
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
            <th>Id</th>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            <!-- <?php
                if($resultado){
                    while($linha = mysqli_fetch_assoc($resultado)){
                        $id = $linha['id'];
                        $nome = $linha['nome'];
                        $cnpj = $linha['cnpj'];
                        $endereco = $linha['endereco'];
                        $telefone = $linha['telefone'];
                        echo "<tr>
                            <th scope='row'> $id </th>
                            <td>$nome</td>
                            <td>$cnpj</td>
                            <td>$endereco</td>
                            <td>$telefone</td>
                        </tr>";
                    }
                }
            ?> -->
        </tbody>
    </table>
</div>
