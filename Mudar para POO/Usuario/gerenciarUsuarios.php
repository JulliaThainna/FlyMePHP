<div class="tab-pane fade show active" id="tab2">
    <div class="container d-flex justify-content-end">
        <button type="button" class="btn m-3 botao-danger" data-bs-toggle="modal" data-bs-target="#modal-deletarTodosUsuarios">
        <i class="bi bi-trash-fill" style="color: #ffffff;"></i>
        Deletar todos os usuários
        </button>
    </div>
    <?php 
        require '../../database/conectDatabase.php';
        $sql = "SELECT * FROM usuario";
        $resultado = mysqli_query($database, $sql);
        $database->close();
    ?>
    <table class="table" id="tabela-usuarios">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Data de Nascimento</th>
            <th>Gênero</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
            if($resultado){
                while($linha = mysqli_fetch_assoc($resultado)){
                    $id = $linha['id'];
                    $nome = $linha['nome'];
                    $cpf = $linha['cpf'];
                    $email = $linha['email'];
                    $data_nasc = $linha['data_nasc'];
                    $genero = $linha['genero'];
                    $telefone = $linha['telefone'];
                    echo "<tr>
                        <th scope='row'> $id </th>
                        <td>$nome</td>
                        <td>$cpf</td>
                        <td>$email</td>
                        <td>$data_nasc</td>
                        <td>$genero</td>
                        <td>$telefone</td>
                    </tr>";
                }
            }
        ?>
        </tbody>
    </table>
</div>