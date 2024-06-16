<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FlyMe - Login</title>
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
    <div class="container mt-3 mb-4">
      <img src="/FlyMePHP/public/imgs/logo-flyme.svg" alt="FlyMe" class="logo-flyme mt-3">
    </div>
  </header>
  <div class="row mx-1">
    <div class="col-md-7 px-5 mt-4">
      <img src="/FlyMePHP/public/imgs/booking-flight.svg" alt="Booking flight girl" class="girl-flyme">
    </div>

    <div class="col-md-5 px-5 mt-5">
      <h1>FlyMe é o seu novo jeito de reservar passagens aéreas</h1>
      <form action="../controller/UsuarioController.php" method="post">
        <div class="mb-3 mt-5">
          <label for="login-email" class="form-label">Email</label>
          <input type="email" class="form-control rounded-5" name="email" id="login-email">
        </div>
        <div>
          <label for="login-senha" class="form-label">Senha</label>
          <input type="password" class="form-control rounded-5" name="senha" id="login-senha">
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="botao-login btn btn-primary rounded-4 mt-5" name="logarUsuario" style="font-size: 1rem;">Entrar</button>
        </div>
        <h6 class="text-center mt-4" style="font-size: 0.9rem;">Não tem uma conta? 
          <a style="text-decoration: none; color: #3C5CAA;" href="/FlyMePHP/app/view/Usuario/formCadastro.php">
            <span class="fw-bold">Cadastre-se</span>
          </a>
        </h6>
      </form>
    </div>
  </div>

  <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
    <div class="modal show" id="modal-cadastroUser" tabindex="-1" style="display: block; background-color: rgba(0,0,0,0.5);">
      <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-body mt-3">
                <h5 class="text-center">Cadastro feito com sucesso!</h5>
            </div>
            <div class="modal-footer">
              <form action="index.php">
                <button type="submit" class="btn btn-primary">Fechar</button>
              </form>
            </div>
          </div>
      </div>
    </div>
  <?php endif; ?>
</body>
</html>
