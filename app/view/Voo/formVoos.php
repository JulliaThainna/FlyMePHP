<div class="container d-flex justify-content-center align-items-center" id="bg-pesquisa">
    <div class="container">
        <h4 class="container p-5 fw-semibold">Encontre voos disponíveis</h4>
        <form action="">   
            <div class="container mb-5" id="bg-pesquisa-sub">
                <div class="row">
                    <form onsubmit="return false;">
                        <div class="col-md-6">
                            <img src="../imgs/origem.svg" alt="" style="width: 1.2rem;">
                            <label for="origem" class="form-label">Origem</label>
                            <input type="text" class="form-control" id="origem" required>
                        </div>
                        <div class="col-md-6">
                            <img src="../imgs/destino.svg" alt="" style="width: 1.2rem;">
                            <label for="destino" class="form-label">Destino</label>
                            <input type="text" class="form-control" id="destino" required>
                        </div>
                        <div class="col-md-6 pt-4">
                            <img src="../imgs/ida.svg" alt="" style="width: 1.2rem;">
                            <label for="data-ida" class="form-label">Ida</label>
                            <input type="date" class="form-control" id="data-ida" required>
                        </div>
                        <div class="col-md-6 pt-4">
                            <img src="../imgs/volta.svg" alt="" style="width: 1.2rem;">
                            <label for="data-volta" class="form-label">Volta</label>
                            <input type="date" class="form-control" id="data-volta">
                        </div>
                        <div class="row pt-4">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img src="../imgs/passageiros.svg" alt="" style="width: 1.2rem;">
                                <label for="qtd-passageiros" class="form-label">Quantidade de passageiros</label>
                                <input type="number" class="form-control" id="qtd-passageiros" required min="1">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="container d-flex justify-content-end">
                            <button class="btn" type="button">
                                <i class="bi bi-chevron-right" id="btn-pesquisa"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>
</div>