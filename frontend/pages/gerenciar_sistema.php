<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyMe - Gerenciar sistema</title>
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
    <link rel="stylesheet" href="../style/gerenciar_sistema.css">
</head>
<body>
  <?php
    include 'menu.php';
  ?>
  
  <div class="container mt-5" id="myTable">
    <ul class="nav nav-tabs px-2 pt-2" id="myTab">
      <li class="nav-item">
        <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1">Voos</a>
      </li>
    </ul>
    <div class="tab-content mt-3" id="myTabContent">
      <div class="tab-pane fade show active" id="tab1">
        <div class="container d-flex justify-content-end">
          <button type="button" class="btn m-3" data-bs-toggle="modal" data-bs-target="#modal-adicionarVoo">
            <i class="bi bi-plus-lg" style="color: #ffffff;"></i>
            Adicionar novo voo
          </button>
          <button type="button" class="btn m-3 botao-danger" data-bs-toggle="modal" data-bs-target="#modal-deletarTodosVoos">
            <i class="bi bi-trash-fill" style="color: #ffffff;"></i>
            Deletar todos os voos
          </button>
        </div>
        <table class="table" id="tabela-voos">
          <thead>
            <tr>
              <th>Id</th>
              <th>Companhia aérea</th>
              <th>Origem</th>
              <th>Destino</th>
              <th>Data/Horário</th>
              <th>Duração (em horas)</th>
              <th>Assentos</th>
              <th>Classe</th>
              <th>Valor</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
  </div>

  
  <!--Modals-->
  <!--Modal adicionar voo (Talvez alterar pra enviar arquivo JSON)-->
  <div class="modal fade" id="modal-adicionarVoo" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Adicionar novo voo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form onsubmit = "return false;">
            <div class="mt-3">
              <label for="ca" class="form-label">Companhia aérea</label>
              <input type="text" class="form-control rounded-5" id="ca" required>
            </div>
            <div class="mt-3">
              <label for="origem" class="form-label">Origem</label>
              <input type="text" class="form-control rounded-5" id="origem" required>
            </div>
            <div class="mt-3">
              <label for="destino" class="form-label">Destino</label>
              <input type="text" class="form-control rounded-5" id="destino" required>
            </div>
            <div class="mt-3">
              <label for="data-horario" class="form-label">Data/Horário</label>
              <input type="datetime-local" class="form-control rounded-5" id="data-horario" required>
            </div>
            <div class="mt-3">
              <label for="duracao" class="form-label">Duração (em horas)</label>
              <input type="number" min="0" class="form-control rounded-5" id="duracao" required>
            </div>
            <div class="mt-3">
              <label for="assentos" class="form-label">Assentos</label>
              <input type="number" min="0" class="form-control rounded-5" id="assentos" required>
            </div>
            <div class="mt-3">
              <label for="classe" class="form-label">Classe</label>
              <select class="form-select" id="classe" required style="background-color: #E6E7E8; border-radius: 2rem;">
                <option value="Econômica" selected>Econômica</option>
                <option value="Executiva">Executiva</option>
                <option value="Primeira">Primeira classe</option>
              </select>
            </div>
            <div class="mt-3">
              <label for="valor" class="form-label">Valor</label>
              <input type="number" min="0" step="any" class="form-control rounded-5" id="valor" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn" onclick="adicionarVoo()">
                Adicionar voo
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--Modal voo adicionado-->
  <div class="modal fade" id="modal-vooAdicionado" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <h4>Voo adicionado com sucesso!</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn botao-fechar" data-bs-dismiss="modal" onclick="location.reload()">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <!--Modal deletar todos os voos-->
  <div class="modal fade" id="modal-deletarTodosVoos" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Deletar todos os voos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <h5>Você tem certeza que deseja deletar TODOS os voos?</h5>
          <p class="text-center">Cuidado, essa ação é irreversível!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn botao-danger" onclick="deletarTodosVoos()">
            Deletar todos os voos
          </button>
        </div>
      </div>
    </div>
  </div>

  <!--Modal voos deletados-->
  <div class="modal fade" id="modal-voosDeletados" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <h4>Todos os voos foram deletados com sucesso!</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn botao-fechar" data-bs-dismiss="modal" onclick="location.reload();">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <!--Modal editar voo-->
  <div class="modal fade" id="modal-alterarVoo" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar voo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form onsubmit = "return false;">
            <div class="mt-3">
              <label for="caModal" class="form-label">Companhia aérea</label>
              <input type="text" class="form-control rounded-5" id="caModal" readonly>
            </div>
            <div class="mt-3">
              <label for="origemModal" class="form-label">Origem</label>
              <input type="text" class="form-control rounded-5" id="origemModal" disabled>
            </div>
            <div class="mt-3">
              <label for="destinoModal" class="form-label">Destino</label>
              <input type="text" class="form-control rounded-5" id="destinoModal" disabled>
            </div>
            <div class="mt-3">
              <label for="data-horarioModal" class="form-label">Data/Horário</label>
              <input type="datetime-local" value="2017-06-01T08:30" class="form-control rounded-5" id="data-horarioModal">
            </div>
            <div class="mt-3">
              <label for="duracaoModal" class="form-label">Duração (em horas)</label>
              <input type="number" class="form-control rounded-5" id="duracaoModal">
            </div>
            <div class="mt-3">
              <label for="assentosModal" class="form-label">Assentos</label>
              <input type="number" class="form-control rounded-5" id="assentosModal">
            </div>
            <div class="mt-3">
              <label for="classeModal" class="form-label">Classe</label>
              <input type="text" class="form-control rounded-5" id="classeModal" disabled>
            </div>
            <div class="mt-3">
              <label for="valorModal" class="form-label">Valor</label>
              <input type="text" class="form-control rounded-5" id="valorModal" disabled>
            </div>
            <p style="font-size: 0.7rem;" class="mt-5">Observação: Só é possível alterar a data/horário, duração e quantidade de assentos do voo.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn" onclick="editarVoo();">
                Editar voo
              </button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <!--Modal voo alterado-->
  <div class="modal fade" id="modal-vooAlterado" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <h4>Voo alterado com sucesso!</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn botao-fechar" data-bs-dismiss="modal" onclick="location.reload();">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <!--Modal deletar voo-->
  <div class="modal fade" id="modal-deletarVoo" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Deletar voo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <h5>Você tem certeza que deseja deletar esse voo?</h5>
          <p class="text-center">Cuidado, essa ação é irreversível!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn botao-danger" onclick="deletarVoo();">
            Deletar voo
          </button>
        </div>
      </div>
    </div>
  </div>

  <!--Modal voo deletado-->
  <div class="modal fade" id="modal-vooDeletado" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <h4>Voo deletado com sucesso!</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn botao-fechar" data-bs-dismiss="modal" onclick="location.reload();">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>