<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyMe - Gerenciar sistema</title>
    <link rel="icon" href="/FlyMePHP/frontend/imgs/icon.png">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="/FlyMePHP/frontend/style/navbar.css">
    <link rel="stylesheet" href="/FlyMePHP/frontend/style/main.css">
    <link rel="stylesheet" href="/FlyMePHP/frontend/style/gerenciar_sistema.css">
</head>
<body>
  <?php include './menu.php'; ?>
  <div class="container mt-5" id="myTable">
      <ul class="nav nav-tabs px-2 pt-2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Voos</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Companhias Aéreas</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Usuários</a>
        </li>
      </ul>
      <div class="tab-content mt-3" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
          <?php include 'Voo/gerenciarVoos.php'; ?>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
          <?php include 'CompanhiaAerea/gerenciarCiaAerea.php'; ?>
        </div>
        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
          <?php include 'Usuario/gerenciarUsuarios.php'; ?>
        </div>
      </div>
  </div>
</body>
</html>
