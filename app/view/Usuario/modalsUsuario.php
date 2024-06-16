<!--Para tela gerenciar sistema-->

<!--Modal cadastro feito com sucesso-->
<div class="modal fade" id="modal-cadastroUser" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <h4>Cadastro feito com sucesso</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
        </div>
        </div>
    </div>
</div>

<!--Modal usuários deletados-->
<!-- <div class="modal fade" id="modal-usuariosDeletados" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <h4>Todos os usuários foram deletados com sucesso!</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn botao-fechar" data-bs-dismiss="modal" onclick="location.reload();">Fechar</button>
        </div>
        </div>
    </div>
</div> -->

<!--Modal deletar usuário-->
<div class="modal fade" id="modal-deletarUsuario" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Deletar usuário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <h5>Você tem certeza que deseja deletar esse usuário?</h5>
            <p class="text-center">Cuidado, essa ação é irreversível!</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
            <form action="/FlyMePHP/app/controller/UsuarioController.php" method="post">
                <input type="hidden" name="deletarUsuario" id="delete-cpf" value="<?= $usuario['cpf']; ?>">
                <button type="submit" class="btn botao-danger">Deletar</button>
            </form>
        </div>
        </div>
    </div>
</div>

<!--Modal usuário deletado-->
<!-- <div class="modal fade" id="modal-usuarioDeletado" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <h4>Usuario deletado com sucesso!</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn botao-fechar" data-bs-dismiss="modal" onclick="location.reload();">Fechar</button>
        </div>
        </div>
    </div>
</div> -->

<!--Modal deletar todos os usuarios-->
<!-- <div class="modal fade" id="modal-deletarTodosUsuarios" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Deletar todos os usuários</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <h5>Você tem certeza que deseja deletar TODOS os usuários?</h5>
            <p class="text-center">Cuidado, essa ação é irreversível!</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn botao-danger">
            Deletar todos os usuários
            </button>
        </div>
        </div>
    </div>
</div> -->

<!--*****************************************************************************************************************-->
<!--Para tela Meu Perfil-->

<!--Modal deletar conta-->
<div class="modal fade" id="modal-deletarConta" tabindex="-1">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Deletar conta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
        <h5 class="fw-semibold">Tem certeza que deseja deletar a sua conta?</h5>
        <p class="text-center">Cuidado, essa ação é irreversível!</p>
        <p>Ao deletar sua conta, todo seu histórico de reservas será apagado e se houver reservas ativas, <span class="fw-semibold">o reembolso NÃO será realizado</span>.</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn botao-danger" data-bs-toggle="modal" data-bs-target="#modal-perfilDeletado">
        Deletar
        </button>
        </button>
    </div>
    </div>
</div>
</div>  

<!--Modal deleção confirmada-->
<div class="modal fade" id="modal-perfilDeletado" tabindex="-1">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
        <h4>Perfil deletado com sucesso!</h4>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
    </div>
    </div>
</div>
</div>

<!--Modal editar perfil-->
<div class="modal fade" id="modal-editarPerfil" tabindex="-1">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Editar informações da conta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
        <form>
        <div class="mt-3">
            <label for="edit-nome" class="form-label">Nome</label>
            <input type="text" class="form-control rounded-5" name="nome" id="edit-nome">
        </div>
        <div class="mt-3">
            <label for="edit-cpf" class="form-label">CPF</label>
            <input type="text" class="form-control rounded-5" name="cpf" id="edit-cpf" disabled>
        </div>
        <div class="mt-3">
            <label for="edit-email" class="form-label">E-mail</label>
            <input type="email" class="form-control rounded-5" name="email" id="edit-email">
        </div>
        <div class="mt-3">
            <label for="edit-senha" class="form-label">Senha</label>
            <input type="password" class="form-control rounded-5" name="senha" id="edit-senha">
        </div>
        <div class="row">
            <div class="col-md-6 mt-3">
            <label for="edit-data_nasc" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control rounded-5" name="data_nasc" id="edit-data_nasc" disabled>
            </div>
            <div class="col-md-6 mt-3">
            <label for="edit-genero" class="form-label">Gênero</label>
            <select class="form-control rounded-5" name="genero" id="edit-genero">
                <option value="Feminino">Feminino</option>
                <option value="Masculino">Masculino</option>
                <option value="Outro">Outro</option>
            </select>
            </div>
        </div>
        <div class="mt-3">
            <label for="edit-telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control rounded-5" name="telefone" id="edit-telefone">
        </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-perfilAlterado">
        Salvar alterações
        </button>
    </div>
    </div>
</div>
</div>

<!--Modal alterações realizadas com sucesso-->
<!-- <div class="modal fade" id="modal-perfilAlterado" tabindex="-1">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
        <h4>Perfil alterado com sucesso!</h4>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
    </div>
    </div>
</div>
</div> -->