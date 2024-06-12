<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyMe - Home</title>
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
    <link rel="stylesheet" href="/FlyMePHP/frontend/style/home.css">
    <link rel="stylesheet" href="/FlyMePHP/frontend/style/gerenciar_sistema.css">
</head>
<body>
  <?php include '../menu.php'; ?>
  <div class="container d-flex justify-content-center align-items-center" id="bg-pesquisa">
    <div class="container">
        <h4 class="container p-5 fw-semibold">Encontre voos disponíveis</h4>
        <form action="">   
            <div class="container mb-5" id="bg-pesquisa-sub">
                <div class="row">
                    <form action="resultadoPesquisaVoos.php" method="post">
                        <div class="col-md-6">
                            <img src="../imgs/origem.svg" alt="" style="width: 1.2rem;">
                            <label for="origem" class="form-label">Origem</label>
                            <input type="text" class="form-control" name="origem" required>
                        </div>
                        <div class="col-md-6">
                            <img src="../imgs/destino.svg" alt="" style="width: 1.2rem;">
                            <label for="destino" class="form-label">Destino</label>
                            <input type="text" class="form-control" name="destino" required>
                        </div>
                        <div class="col-md-6 pt-4">
                            <img src="../imgs/ida.svg" alt="" style="width: 1.2rem;">
                            <label for="data-ida" class="form-label">Ida</label>
                            <input type="date" class="form-control" name="data-ida" required>
                        </div>
                        <div class="col-md-6 pt-4">
                            <img src="../imgs/volta.svg" alt="" style="width: 1.2rem;">
                            <label for="data-volta" class="form-label">Volta</label>
                            <input type="date" class="form-control" name="data-volta">
                        </div>
                        <div class="row pt-4">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img src="../imgs/passageiros.svg" alt="" style="width: 1.2rem;">
                                <label for="qtd-passageiros" class="form-label">Quantidade de passageiros</label>
                                <input type="number" class="form-control" name="qtd-passageiros" required min="1">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="container d-flex justify-content-end">
                            <button class="btn" type="submit">
                                <i class="bi bi-chevron-right" id="btn-pesquisa"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>
  </div>
</body>
</html>