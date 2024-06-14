<!--Modal cadastrar companhia aérea (Talvez alterar pra enviar arquivo JSON)-->
<div class="modal fade" id="modal-cadastrarCa" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Cadastrar nova Companhia Aérea</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form action="/FlyMePHP/app/controller/CompanhiaAereaController.php" method="post">
                <div class="mt-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control rounded-5" name="nome" required>
                </div>
                <div class="mt-3">
                    <label for="cnpj" class="form-label">CNPJ</label>
                    <input type="text" class="form-control rounded-5" name="cnpj" required>
                </div>
                <div class="mt-3">
                    <label for="endereco" class="form-label">Endereco</label>
                    <input type="text" class="form-control rounded-5" name="endereco" required>
                </div>
                <div class="mt-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control rounded-5" name="telefone" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn" name="cadastrarCA">Cadastrar</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

<!--Modal companhia aérea adicionada-->
<div class="modal fade" id="modal-caAdicionada" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <h4>Companhia aérea adicionada com sucesso!</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn botao-fechar" data-bs-dismiss="modal" onclick="location.reload()">Fechar</button>
        </div>
        </div>
    </div>
</div>

<!--Modal editar companhia aérea-->
<div class="modal fade" id="modal-editarCa" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Editar companhia aérea</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form action="/FlyMePHP/app/controller/CompanhiaAereaController.php" method="post">
                <div class="mt-3">
                    <label for="nomeCa" class="form-label">Nome</label>
                    <input type="text" class="form-control rounded-5" id="nomeCA">
                </div>
                <div class="mt-3">
                    <label for="cnpjCa" class="form-label">Cnpj</label>
                    <input type="text" class="form-control rounded-5" id="cnpjCa">
                </div>
                <div class="mt-3">
                    <label for="enderecoCa" class="form-label">Endereço</label>
                    <input type="text" class="form-control rounded-5" id="enderecoCA">
                </div>
                <div class="mt-3">
                    <label for="telefoneCa" class="form-label">Telefone</label>
                    <input type="text" class="form-control rounded-5" id="telefoneCa">
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn" name="editarCA">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal companhia aérea editada-->
<div class="modal fade" id="modal-caEditada" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <h4>Companhia aérea alterada com sucesso!</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn botao-fechar" data-bs-dismiss="modal" onclick="location.reload();">Fechar</button>
        </div>
        </div>
    </div>
</div>

<!--Modal deletar companhia aérea-->
<div class="modal fade" id="modal-deletarCa" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Deletar companhia aérea</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <h5>Você tem certeza que deseja deletar essa companhia aérea?</h5>
            <p class="text-center">Cuidado, essa ação é irreversível!</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
            <form action="../controller/CompanhiaAereaController.php" method="get">
                <input type="hidden" name="deletarCA" id="delete-id">
                <button type="submit" class="btn botao-danger">Deletar</button>
            </form>
        </div>
        </div>
    </div>
</div>

<!--Modal companhia aérea deletada-->
<div class="modal fade" id="modal-caDeletada" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <h4>Companhia aérea deletada com sucesso!</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn botao-fechar" data-bs-dismiss="modal" onclick="location.reload();">Fechar</button>
        </div>
        </div>
    </div>
</div>


<!--Modal deletar todos as companhias aéreas-->
<!-- <div class="modal fade" id="modal-deletarTodasCA" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Deletar todas as companhias aéreas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <h5>Você tem certeza que deseja deletar TODAS as companhias aéreas?</h5>
            <p class="text-center">Cuidado, essa ação é irreversível!</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn botao-danger">
            Deletar todas as companhias aéreas
            </button>
        </div>
        </div>
    </div>
</div> -->

<!--Modal companhias aéreas deletadas-->
<!-- <div class="modal fade" id="modal-caDeletadas" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <h4>Todas as companhias aéreas foram deletadas com sucesso!</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn botao-fechar" data-bs-dismiss="modal" onclick="location.reload();">Fechar</button>
        </div>
        </div>
    </div>
</div> -->