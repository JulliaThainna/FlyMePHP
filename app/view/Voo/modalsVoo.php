<!--Modal adicionar voo (Talvez alterar pra enviar arquivo JSON)-->
<div class="modal fade" id="modal-cadastrarVoo" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar novo voo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="../controller/VooController.php" method="post">
                    <div class="mt-3">
                        <label for="create-companhia-aerea-id" class="form-label">Companhia aérea</label>
                        <select name="companhia-aerea-id" class="form-control rounded-5" id="create-companhia-aerea-id" required>
                            <?php foreach ($listCAs as $ca): ?>
                                <option value="<?= $ca['id'] ?>"><?= $ca['nome']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="create-origem" class="form-label">Origem</label>
                        <input type="text" class="form-control rounded-5" name="origem" id="create-origem" required>
                    </div>
                    <div class="mt-3">
                        <label for="create-destino" class="form-label">Destino</label>
                        <input type="text" class="form-control rounded-5" name="destino" id="create-destino" required>
                    </div>
                    <div class="mt-3">
                        <label for="create-data-horario" class="form-label">Data/Horário</label>
                        <input type="datetime-local" class="form-control rounded-5" name="data_horario" id="create-data-horario" required>
                    </div>
                    <div class="mt-3">
                        <label for="create-duracao" class="form-label">Duração (em horas)</label>
                        <input type="number" min="0" class="form-control rounded-5" name="duracao" id="create-duracao" required>
                    </div>
                    <div class="mt-3">
                        <label for="create-assentos" class="form-label">Assentos</label>
                        <input type="number" min="0" class="form-control rounded-5" name="assentos" id="create-assentos" required>
                    </div>
                    <div class="mt-3">
                        <label for="create-valor" class="form-label">Valor</label>
                        <input type="number" min="0" step="any" class="form-control rounded-5" name="valor" id="create-valor" required>
                    </div>
                    <!-- <div class="mt-3">
                        <label for="classe" class="form-label">Classe</label>
                        <select class="form-select" id="classe" required style="background-color: #E6E7E8; border-radius: 2rem;">
                            <option value="Econômica" selected>Econômica</option>
                            <option value="Executiva">Executiva</option>
                            <option value="Primeira">Primeira classe</option>
                        </select>
                    </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn" name="cadastrarVoo">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Modal editar voo-->
<div class="modal fade" id="modal-editarVoo" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar voo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="../controller/VooController.php" method="post">
                <input type="hidden" name="id" id="edit-id">   
                    <div class="mt-3">
                        <label for="edit-companhia-aerea-id" class="form-label">Companhia aérea</label>
                        <select name="companhia-aerea-id" class="form-control rounded-5" id="edit-companhia-aerea-id" required>
                            <?php foreach ($listCAs as $ca): ?>
                                <option value="<?= $ca['id'] ?>"><?= $ca['nome']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="edit-origem" class="form-label">Origem</label>
                        <input type="text" class="form-control rounded-5" name="origem" id="edit-origem">
                    </div>
                    <div class="mt-3">
                        <label for="edit-destino" class="form-label">Destino</label>
                        <input type="text" class="form-control rounded-5" name="destino" id="edit-destino">
                    </div>
                    <div class="mt-3">
                        <label for="edit-data-horario" class="form-label">Data/Horário</label>
                        <input type="datetime-local" class="form-control rounded-5" name="data_horario" id="edit-data-horario">
                    </div>
                    <div class="mt-3">
                        <label for="edit-duracao" class="form-label">Duração (em horas)</label>
                        <input type="number" class="form-control rounded-5" name="duracao" id="edit-duracao">
                    </div>
                    <div class="mt-3">
                        <label for="edit-assentos" class="form-label">Assentos</label>
                        <input type="number" class="form-control rounded-5" name="assentos" id="edit-assentos">
                    </div>
                    <div class="mt-3">
                        <label for="edit-valor" class="form-label">Valor</label>
                        <input type="text" class="form-control rounded-5" name="valor" id="edit-valor">
                    </div>
                    <!-- <div class="mt-3">
                        <label for="classeModal" class="form-label">Classe</label>
                        <input type="text" class="form-control rounded-5" id="classeModal" disabled>
                    </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn" name="editarVoo">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Modal deletar voo-->
<div class="modal fade" id="modal-deletarVoo" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deletar Voo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <h5>Você tem certeza que deseja deletar esse voo?</h5>
                <p class="text-center">Cuidado, essa ação é irreversível!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn botao-fechar" data-bs-dismiss="modal">Fechar</button>
                <form action="../controller/VooController.php" method="post">
                    <input type="hidden" name="deletarVoo" id="delete-id-voo">
                    <button type="submit" class="btn botao-danger">Deletar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Modal voo adicionado-->
<!-- <div class="modal fade" id="modal-vooAdicionado" tabindex="-1">
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
</div> -->

<!--Modal deletar todos os voos-->
<!-- <div class="modal fade" id="modal-deletarTodosVoos" tabindex="-1">
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
</div> -->

<!--Modal voos deletados-->
<!-- <div class="modal fade" id="modal-voosDeletados" tabindex="-1">
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
</div> -->
