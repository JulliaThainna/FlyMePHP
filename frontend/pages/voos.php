<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyMe - Voos</title>
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
    <link rel="stylesheet" href="../style/main.css">
</head>
<body>
  <?php
    include 'menu.php';
  ?> 

  <div class="container mt-5">
    <h3 class="mt-4 pt-3 fw-bold">Voos de Londrina (PR) para São Paulo (SP)</h3>
    <h4 class="mt-3 pt-3 fw-semibold">Ida (26/05/2023)</h4>
  </div>
  <div class="container pt-3">
    <div class="row">    
      <div class="col-md-3 mt-1">
        <div class="container pb-3" id="content">
            <div class="pt-3 text-center">
              <img src="../imgs/origem.svg" alt="">
              <h3 class="fw-bold" id="GOL">GOL</h3>
              <p class="fw-semibold">Aeroporto de Londrina </p>
              <p class="fwbold">25/06/2023 - 15h30</p>
              <p><span class="fw-semibold">Classe:</span> Executiva</p> 
              <p><span class="fw-semibold">Duração do voo:</span> 1h15</p>  
              <p class="fw-bold">R$ 450,00</p>
              <div class="mt-2 mb-2" id="container-btn">
                <!--button trigger modal-->
                <button type="button" class="btn reserva" data-bs-toggle="modal" data-bs-target="#modal-reservar">
                  Reservar
                </button>
              </div>
            </div>
          </div>
      </div>

      <div class="col-md-3 mt-1">
        <div class="container pb-3" id="content">
            <div class="pt-3 text-center">
              <img src="../imgs/origem.svg" alt="">
              <h3 class="fw-bold" id="GOL">GOL</h3>
              <p class="fw-semibold">Aeroporto de Londrina </p>
              <p class="fwbold">25/06/2023 - 15h30</p>
              <p><span class="fw-semibold">Classe:</span> Executiva</p> 
              <p><span class="fw-semibold">Duração do voo:</span> 1h15</p>  
              <p class="fw-bold">R$ 450,00</p>
              <div class="mt-2 mb-2" id="container-btn">
                <!--button trigger modal-->
                <button type="button" class="btn reserva" data-bs-toggle="modal" data-bs-target="#modal-reservar">
                  Reservar
                </button>
              </div>
            </div>
          </div>
      </div>

      <div class="col-md-3 mt-1">
        <div class="container pb-3" id="content">
          <div class="pt-3 text-center">
            <img src="../imgs/origem.svg" alt="">
            <h3 class="fw-bold" id="GOL">GOL</h3>
            <p class="fw-semibold">Aeroporto de Londrina </p>
            <p class="fwbold">25/06/2023 - 15h30</p>
            <p><span class="fw-semibold">Classe:</span> Executiva</p> 
            <p><span class="fw-semibold">Duração do voo:</span> 1h15</p>  
            <p class="fw-bold">R$ 450,00</p>
            <div class="mt-2 mb-2" id="container-btn">
              <!--button trigger modal-->
              <button type="button" class="btn reserva" data-bs-toggle="modal" data-bs-target="#modal-reservar">
                Reservar
              </button>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="container mt-5">
        <h4 class="mt-3 pt-3 fw-semibold pb-3">Volta (30/05/2023)</h4>
    </div>
    <div class="row">
      <div class="col-md-3 mt-1">
        <div class="container pb-3" id="content">
            <div class="pt-3 text-center">
              <img src="../imgs/origem.svg" alt="">
              <h3 class="fw-bold" id="GOL">GOL</h3>
              <p class="fw-semibold">Aeroporto Internacional de Guarulhos</p>
              <p>30/06/2023 - 14h25</p>
              <p><span class="fw-semibold">Classe: </span>Econômica</p> 
              <p><span class="fw-semibold">Duração do voo: </span>1h15</p>  
              <p class="fw-bold">R$ 285,00</p>
              <div class="mt-2 mb-2" id="container-btn">
                <!--button trigger modal-->
                <button type="button" class="btn reserva" data-bs-toggle="modal" data-bs-target="#modal-reservar">
                  Reservar
                </button>
              </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 mt-1">
      <div class="container pb-3" id="content">
          <div class="pt-3 text-center">
            <img src="../imgs/origem.svg" alt="">
            <h3 class="fw-bold" id="GOL">GOL</h3>
            <p class="fw-semibold">Aeroporto Internacional de Guarulhos</p>
            <p>30/06/2023 - 14h25</p>
            <p><span class="fw-semibold">Classe: </span>Econômica</p> 
            <p><span class="fw-semibold">Duração do voo: </span>1h15</p>  
            <p class="fw-bold">R$ 285,00</p>
            <div class="mt-2 mb-2" id="container-btn">
              <!--button trigger modal-->
              <button type="button" class="btn reserva" data-bs-toggle="modal" data-bs-target="#modal-reservar">
                Reservar
              </button>
            </div>
          </div>
      </div>
    </div>
  </div>

  <!--Modals-->
  <!--Modal reservar-->
  <div class="modal fade" id="modal-reservar" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Adicionar reserva</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <h4 class="fw-semibold">Reserva adicionada com sucesso!</h4>
          <p>Observação: Se a sua viagem tem ida e volta, você deve reservar a ida e a volta manualmente.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn">
            <a style="text-decoration: none; color: white;" href="../pages/gerenciar_reservas.php">Ir para minhas reservas</a>
          </button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>