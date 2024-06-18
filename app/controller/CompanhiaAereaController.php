<?php
include_once "../dao/connectionFactory.php";
include_once "../dao/CompanhiaAereaDAO.php";
include_once "../model/CompanhiaAerea.php";


class CompanhiaAereaController{
    private $caDao;
    private $ca;

    public function __construct() {
        $this->caDao = new CompanhiaAereaDAO();
        $this->ca = new CompanhiaAerea();
    }

    //INSERT
    public function create(){
        $data = filter_input_array(INPUT_POST);
        
        $this->ca->setNome($data["nome"]);
        $this->ca->setCnpj($data["cnpj"]);    
        $this->ca->setEndereco($data["endereco"]);
        $this->ca->setTelefone($data["telefone"]);
    
        $this->caDao->create($this->ca);
        header("Location: ../view/gerenciarSistema.php#tab2");
    }

    //SELECT *
    public function read(){
        return $this->caDao->read();
    }

    //UPDATE
    public function update(){
        $data = filter_input_array(INPUT_POST);

        $this->ca->setId($data["id"]);
        $this->ca->setNome($data["nome"]);
        $this->ca->setCnpj($data["cnpj"]);    
        $this->ca->setEndereco($data["endereco"]);
        $this->ca->setTelefone($data["telefone"]);
    
        $this->caDao->update($this->ca);
        header("Location: ../view/gerenciarSistema.php#tab2");
    }

    //DELETE
    public function delete(CompanhiaAerea $ca){
        $this->caDao->delete($ca);
        header("Location: ../view/gerenciarSistema.php#tab2");
    }

    public function getCaById($id){
        return $this->caDao->getCaById($id);
    }
}

//Objetos
$ca = new CompanhiaAerea();
$caController = new CompanhiaAereaController();

//Quando clicar no botão de cadastrar
if(isset($_POST["cadastrarCA"])){
    $caController->create();
}

//Quando clicar em editar
if(isset($_POST["editarCA"])){
    $caController->update();
}

//Quando clicar no botão deletar
if(isset($_POST["deletarCA"])){    
    $ca->setId($_POST["deletarCA"]);
    $caController->delete($ca);
}
?>