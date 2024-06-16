<?php
    require "../controller/UsuarioController.php";
    require "modalsUsuario.php";

    $usuario = new UsuarioController();
    $listUsuarios = $usuario->read();
?>

<div class="tab-pane fade show active" id="tab3">
    <div class="container d-flex justify-content-end">
        <!-- <button type="button" class="btn m-3 botao-danger" data-bs-toggle="modal" data-bs-target="#modal-deletarTodosUsuarios">
            <i class="bi bi-trash-fill" style="color: #ffffff;"></i>
            Deletar todos os usuários
        </button> -->
    </div>
    <table class="table" id="tabela-usuarios">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Cpf</th>
            <th scope="col">E-mail</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Gênero</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($usuario->read() as $usuario) : ?>
            <tr>
                <td><?= $usuario->getNome() ?></td>
                <td><?= $usuario->getCpf() ?></td>
                <td><?= $usuario->getEmail() ?></td>
                <td><?= $usuario->getDataNasc() ?></td>
                <td><?= $usuario->getGenero() ?></td>
                <td><?= $usuario->getTelefone() ?></td>
                <td>
                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-deletarUsuario" onclick="document.getElementById('delete-cpf').value='<?= $usuario->getCpf() ?>'">Deletar</button>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>