    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FlyMe - Perfil</title>
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
        <link rel="stylesheet" href="/FlyMePHP/public/style/home.css">
        <link rel="stylesheet" href="/FlyMePHP/public/style/main.css">
    </head>
    <body>
      <?php
        //Ver o usuário que está logado / se tem algum usuário logado
        session_reset();
        session_start();
        if(!isset($_SESSION["usuario"])){
          header("Location: ../index.php");
          exit();
        }
        $usuario = $_SESSION["usuario"];

        require "./modalsUsuario.php";
        include "../menu.php";
      ?>
      
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6 mt-5">
          <h1 class="text-center">Meu Perfil</h1>
          <div class="mt-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control rounded-5" name="nome" id="read-nome" value="<?php echo $usuario["nome"]; ?>" disabled>
          </div>
          <div class="mt-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control rounded-5" name="cpf" id="read-cpf" value="<?php echo $usuario["cpf"]; ?>" disabled>
          </div>
          <div class="mt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control rounded-5" name="email" id="read-email" value="<?php echo $usuario["email"]; ?>" disabled>
          </div>
          <div class="row">
            <div class="col-md-6 mt-3">
              <label for="data_nasc" class="form-label">Data de Nascimento</label>
              <input type="date" class="form-control rounded-5" name="data_nasc" id="read-data_nasc" value="<?php echo $usuario["data_nasc"]; ?>" disabled>
            </div>
            <div class="col-md-6 mt-3">
              <label for="genero" class="form-label">Gênero</label>
              <input type="text" class="form-control rounded-5" name="genero" id="read-genero" value="<?php echo $usuario["genero"]; ?>" disabled>
            </div>
          </div>
          <div class="mb-3 mt-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control rounded-5" name="telefone" id="read-telefone" value="<?php echo $usuario["telefone"]; ?>" disabled>
          </div>
          <div class="row mt-5 d-flex align-items-center justify-content-center">
            <div class="col-md-4 m-1">
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-editarConta" 
                onclick="
                document.getElementById('edit-nome').value='<?= $usuario['nome'] ?>';
                document.getElementById('edit-cpf').value='<?= $usuario['cpf'] ?>';
                document.getElementById('edit-email').value='<?= $usuario['email'] ?>';
                document.getElementById('edit-senha').value='<?= $usuario['senha'] ?>';
                document.getElementById('edit-data_nasc').value='<?= $usuario['data_nasc'] ?>';
                document.getElementById('edit-genero').value='<?= $usuario['genero'] ?>';
                document.getElementById('edit-telefone').value='<?= $usuario['telefone'] ?>';
              ">
                Editar informações
              </button>
            </div> 
            <div class="col-md-4 m-1">
              <button type="button" class="btn botao-danger" data-bs-toggle="modal" data-bs-target="#modal-deletarConta">
                Deletar conta
              </button>
            </div>
          </div>
        </div>
      </div>
    </body>
    </html>