<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FlyMe - Login</title>
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

    <div class="col-md-5 px-5 mt-5">
      <h1>FlyMe é o seu novo jeito de reservar passagens aéreas</h1>
      <form onsubmit="return false;">
        <div class="mb-3 mt-5">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control rounded-5" id="email">
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control rounded-5" id="senha">
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="botao-login btn btn-primary rounded-4 mt-5">Entrar</button>
        </div>
        <h6 class="text-center mt-5" style="font-size: 0.7rem;">Não tem uma conta? 
          <a style="text-decoration: none; color: #3C5CAA;" href="../pages/cadastro.php">
            <span class="fw-bold" onclick="fazerLogin()">Cadastre-se</span>
          </a>
        </h6>
      </form>
    </div>
  </div>
</body>
</html>
