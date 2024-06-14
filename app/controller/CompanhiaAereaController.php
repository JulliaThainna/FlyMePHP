<?php
include_once "../dao/connectionFactory.php";
include_once "../dao/CompanhiaAereaDAO.php";
include_once "../model/CompanhiaAerea.php";

class CompanhiaAereaController{
    private $caDao;

    public function __construct() {
        $this->caDao = new CompanhiaAereaDAO();
    }

    //INSERT
    public function create(){
        $data = filter_input_array(INPUT_POST);
        $ca = new CompanhiaAerea();
    
        $ca->setNome($data["nome"]);
        $ca->setCnpj($data["cnpj"]);    
        $ca->setEndereco($data["endereco"]);
        $ca->setTelefone($data["telefone"]);
    
        $this->caDao->create($ca);
        header("Location: ../view/gerenciarSistema.php#tab2");
    }

    //SELECT *
    public function read(){
        return $this->caDao->read();
    }
}

//Quando clicar no botão de cadastrar
if(isset($_POST["cadastrarCA"])){
    $newCa = new CompanhiaAereaController();
    $newCa->create();
}
?>