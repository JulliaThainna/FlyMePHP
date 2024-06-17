<?php
include_once "../dao/connectionFactory.php";
include_once "../dao/VooDAO.php";
include_once "../model/Voo.php";

class VooController{
    private $vooDao;
    private $voo;

    public function __construct() {
        $this->vooDao = new VooDAO();
        $this->voo = new Voo();
    }

    //INSERT
    public function create(){
        $data = filter_input_array(INPUT_POST);

        $this->voo->setCompanhiaAereaId($data["companhia-aerea-id"]);
        $this->voo->setOrigem($data["origem"]);
        $this->voo->setDestino($data["destino"]);
        $this->voo->setDataHorario($data["data_horario"]);
        $this->voo->setDuracao($data["duracao"]);
        $this->voo->setAssentos($data["assentos"]);
        $this->voo->setValor($data["valor"]);
    }
}

//Objetos
$voo = new Voo();
$vooController = new VooController();

//Se clicar no botão de cadastrar
if(isset($_POST["cadastrarVoo"])){
    $vooController->create();
}
?>