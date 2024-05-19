<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyMe - Perfil</title>
    <link rel="icon" href="../imgs/icon.png">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="../style/main.css">
</head>
<body>
  <?php include 'menu.php'; ?>
  
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-6 mt-5">
      <h1 class="text-center">Meu Perfil</h1>
      <div class="mt-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control rounded-5" id="nome" disabled>
      </div>
      <div class="mt-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control rounded-5" id="cpf" disabled>
      </div>
      <div class="mt-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control rounded-5" id="email" disabled>
      </div>
      <div class="mt-2">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control rounded-5" id="senha" disabled>
      </div>
      <div class="row">
        <div class="col-md-6 mt-3">
          <label for="data_nasc" class="form-label">Data de Nascimento</label>
          <input type="date" class="form-control rounded-5" id="data_nasc" disabled>
        </div>
        <div class="col-md-6 mt-3">
          <label for="genero" class="form-label">Gênero</label>
          <input type="text" class="form-control rounded-5" id="genero" disabled>
        </div>
      </div>
      <div class="mb-3 mt-3">
        <label for="tel" class="form-label">Telefone</label>
        <input type="tel" class="form-control rounded-5" id="tel">
      </div>
      <div class="row mt-5 d-flex align-items-center justify-content-center">
        <div class="col-md-4 m-1">
          <!--button trigger modal-->
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-editarPerfil">
            Editar informações
          </button>
        </div> 
    
        <div class="col-md-4 m-1">
          <!--button trigger modal-->
          <button type="button" class="btn botao-danger" data-bs-toggle="modal" data-bs-target="#modal-deletarConta">
            Deletar conta
          </button>
      </div>
    </div>
  </div>

  <!--Modals-->
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
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control rounded-5" id="nome-modal">
            </div>
            <div class="mt-3">
              <label for="cpf" class="form-label">CPF</label>
              <input type="text" class="form-control rounded-5" id="cpf-modal" disabled>
            </div>
            <div class="mt-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control rounded-5" id="email-modal">
            </div>
            <div class="mt-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control rounded-5" id="senha-modal">
            </div>
            <div class="row">
              <div class="col-md-6 mt-3">
                <label for="data" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control rounded-5" id="data-modal" disabled>
              </div>
              <div class="col-md-6 mt-3">
                <label for="genero" class="form-label">Gênero</label>
                <select class="form-control rounded-5" name="genero" id="genero-modal">
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                  <option value="Outro">Outro</option>
                </select>
              </div>
            </div>
            <div class="mt-3">
              <label for="tel" class="form-label">Telefone</label>
              <input type="tel" class="form-control rounded-5" id="tel-modal">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-perfilAlterado">
            Salvar alterações
          </button>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!--Modal alterações realizadas com sucesso-->
  <div class="modal fade" id="modal-perfilAlterado" tabindex="-1">
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
  </div>
</body>
</html>