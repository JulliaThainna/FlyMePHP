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
                        <label for="companhia-aerea" class="form-label">Companhia aérea</label>
                        <select name="companhia-aerea-id" class="form-control rounded-5" required>
                            <?php foreach ($listCAs as $ca): ?>
                                <option value="<?= $ca['id'] ?>"><?= $ca['nome']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="origem" class="form-label">Origem</label>
                        <input type="text" class="form-control rounded-5" name="origem" required>
                    </div>
                    <div class="mt-3">
                        <label for="destino" class="form-label">Destino</label>
                        <input type="text" class="form-control rounded-5" name="destino" required>
                    </div>
                    <div class="mt-3">
                        <label for="data-horario" class="form-label">Data/Horário</label>
                        <input type="datetime-local" class="form-control rounded-5" name="data_horario" required>
                    </div>
                    <div class="mt-3">
                        <label for="duracao" class="form-label">Duração (em horas)</label>
                        <input type="number" min="0" class="form-control rounded-5" name="duracao" required>
                    </div>
                    <div class="mt-3">
                        <label for="assentos" class="form-label">Assentos</label>
                        <input type="number" min="0" class="form-control rounded-5" name="assentos" required>
                    </div>
                    <div class="mt-3">
                        <label for="valor" class="form-label">Valor</label>
                        <input type="number" min="0" step="any" class="form-control rounded-5" name="valor" required>
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
                        <button type="submit" class="btn" name="cadastrarVoo">Adicionar</button>
                    </div>
                </form>
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
            <!-- <div class="mt-3">
                <label for="caModal" class="form-label">Companhia aérea</label>
                <input type="text" class="form-control rounded-5" id="caModal" readonly>
            </div> -->
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
            <!-- <div class="mt-3">
                <label for="classeModal" class="form-label">Classe</label>
                <input type="text" class="form-control rounded-5" id="classeModal" disabled>
            </div> -->
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
