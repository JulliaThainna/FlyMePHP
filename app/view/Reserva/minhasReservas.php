<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyMe - Minhas reservas</title>
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
    <link rel="stylesheet" href="/FlyMePHP/public/style/navbar.css">
    <link rel="stylesheet" href="/FlyMePHP/public/style/main.css">
</head>
<body>
  <?php
    //Ver o usuário que está logado / se tem algum usuário logado
    session_start();

    if(!isset($_SESSION["usuario"])){
      header("Location: ../index.php");
      exit();
    }
    $usuario = $_SESSION["usuario"];

    require 'modalsReserva.php';
    include '../menu.php';
  ?>
  <div class="container mt-5">
    <h3 class="mt-4 pt-3 fw-bold">Gerenciar minhas reservas</h3>
    <h4 class="mt-3 pt-3 fw-semibold">Reservas ativas</h4>
  </div>
  <div class="container pt-3">
    <div class="row">
      <div class="col-md-3 mt-1">
        <div class="container-fluid" id="content">
          <div class="pt-3 text-center">
            <img src="../imgs/origem.svg" alt="">
            <h3 class="fw-bold" id="GOL">GOL</h3>
            <p class="fw-bold">Londrina -> Sao Paulo </p>
            <p> Aeroporto de Londrina </p>
            <p> 25/06/2023 - 15h30</p>
            <p> Classe: Executiva</p> 
            <p> Duração do voo: 1h15</p>  
            <p> Passageiros: 2</p>
            <p> Valor pago: R$ 450,00</p>
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-md-4 mb-4 pt-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-editarReserva">
                  Editar
                </button>
              </div>
              <div class="col-md-4 mb-4 pt-2" id="btn">
                <!-- Button trigger modal -->
                <button type="button" class="btn botao-danger" data-bs-toggle="modal" data-bs-target="#modal-cancelarReserva">
                  Cancelar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>  


  <div class="container">
    <h4 class="mt-3 pt-3 fw-semibold">Reservas Finalizadas</h4>
  </div>
  <div class="col-md-3 mt-1">
    <div class="container pb-3" id="content">
      <div class="pt-3 text-center">
        <img src="../imgs/origem.svg" alt="">
        <h3 class="fw-bold" id="GOL">GOL</h3>
        <p class="fw-bold">Londrina -> Sao Paulo </p>
        <p> Aeroporto de Londrina </p>
        <p> 25/06/2023 - 15h30</p>
        <p> Classe: Executiva</p> 
        <p> Duração do voo: 1h15</p>  
        <p> Passageiros: 2</p>
        <p> Valor pago: R$ 450,00</p>
      </div>
    </div>
  </div>

  <div class="container">
    <h4 class="mt-3 pt-3 fw-semibold">Reservas Canceladas</h4>
  </div>

  <div class="container pt-3">
      <div class="col-md-3 mt-1">
        <div class="container pb-3" id="content">
          <div class="pt-3 text-center">
            <img src="../imgs/origem.svg" alt="">
            <h3 class="fw-bold" id="GOL">GOL</h3>
            <p class="fw-bold">Londrina -> Sao Paulo </p>
            <p> Aeroporto de Londrina </p>
            <p> 25/06/2023 - 15h30</p>
            <p> Classe: Executiva</p> 
            <p> Duração do voo: 1h15</p>  
            <p> Passageiros: 2</p>
            <p> Valor pago: R$ 450,00</p>
          </div>
        </div>
      </div>
  </div>
</body>
</html>