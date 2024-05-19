<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FlyMe - Cadastro</title>
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
  <link rel="stylesheet" href="../style/login.css">
  <link rel="stylesheet" href="../style/main.css">
</head>
<body>
  <header>
    <div class="container mt-4">
      <img src="../imgs/logo-flyme.svg" alt="FlyMe" class="img-fluid" style="width: 25rem;">
    </div>
  </header>
  <div class="row mx-1">
    <div class="col-md-7 px-5 mt-4">
      <img src="../imgs/booking-flight.svg" alt="Booking flight girl" class="img-fluid">
    </div>

    <div class="col-md-5 px-5">
      <h1 class="text-center">Criar nova conta</h1>
      <form onsubmit="return false;">
        <div class="mt-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control rounded-5" id="nome">
        </div>
        <div class="mt-3">
          <label for="cpf" class="form-label">CPF</label>
          <input type="text" class="form-control rounded-5" id="cpf">
        </div>
        <div class="mt-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control rounded-5" id="email">
        </div>
        <div class="mt-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control rounded-5" id="senha">
        </div>
        <div class="row">
          <div class="col-md-6 mt-3">
            <label for="data_nasc" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control rounded-5" id="data_nasc">
          </div>
          <div class="col-md-6 mt-3">
            <label for="genero" class="form-label">Gênero</label>
              <select class="form-control rounded-5" id="genero">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
              </select>
          </div>
          <div class="mt-3">
            <label for="tel" class="form-label">Telefone</label>
            <input type="number" class="form-control rounded-5" id="tel">
          </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
          <button type="submit" class="btn btn-primary rounded-4 mt-5 botao-login" onclick="cadastrarUsuario()">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>

  <!--Modals-->
  <!--Modal alterações realizadas com sucesso-->
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
          <button type="button" class="btn botao-fechar" data-bs-dismiss="modal" onclick="abrirHome()">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
