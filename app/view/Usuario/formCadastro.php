<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FlyMe - Cadastro</title>
  <link rel="icon" href="/FlyMePHP/public/imgs/icon.png">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!--CSS-->
  <link rel="stylesheet" href="/FlyMePHP/public/style/login.css">
  <link rel="stylesheet" href="/FlyMePHP/public/style/main.css">
</head>
<body>
  <header>
    <div class="container mt-4">
      <img src="/FlyMePHP/public/imgs/logo-flyme.svg" alt="FlyMe" class="img-fluid" style="width: 25rem;">
    </div>
  </header>
  <div class="row mx-1">
    <div class="col-md-7 px-5 mt-4">
      <img src="/FlyMePHP/public/imgs/booking-flight.svg" alt="Booking flight girl" class="img-fluid">
    </div>

    <div class="col-md-5 px-5">
      <h1 class="text-center">Criar nova conta</h1>
      <form action="../../controller/UsuarioController.php" method="post">
        <div class="mt-3">
          <label for="create-nome" class="form-label">Nome</label>
          <input type="text" class="form-control rounded-5" name="nome" id="create-nome" required>
        </div>
        <div class="mt-3">
          <label for="create-cpf" class="form-label">CPF</label>
          <input type="text" class="form-control rounded-5" name="cpf" id="create-cpf" required>
        </div>
        <div class="mt-3">
          <label for="create-email" class="form-label">Email</label>
          <input type="email" class="form-control rounded-5" name="email" id="create-email" required>
        </div>
        <div class="mt-3">
          <label for="create-senha" class="form-label">Senha</label>
          <input type="password" class="form-control rounded-5" name="senha" id="create-senha" required>
        </div>
        <div class="row">
          <div class="col-md-6 mt-3">
            <label for="create-data_nasc" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control rounded-5" name="data_nasc" id="create-data_nasc" required>
          </div>
          <div class="col-md-6 mt-3">
            <label for="create-genero" class="form-label">Gênero</label>
              <select class="form-control rounded-5" name="genero" id="create-genero" required>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
              </select>
          </div>
          <div class="mt-3">
            <label for="create-telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control rounded-5" name="telefone" id="create-telefone" required>
          </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
          <button type="submit" class="btn btn-primary rounded-4 mt-5 botao-login" name="cadastrarUsuario">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
