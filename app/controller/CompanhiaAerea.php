<?php
include_once "../dao/connectionFactory.php";
include_once "../dao/CompanhiaAereaDAO.php";
include_once "../model/CompanhiaAerea.php";

$ca = new CompanhiaAerea();
$caDao = new CompanhiaAereaDAO();
$data = filter_input_array(INPUT_POST);

//INSERT
if(isset($_POST["cadastrarCA"])){
    $ca->setNome($data["nome"]);
    $ca->setCnpj($data["cnpj"]);
    $ca->setEndereco($data["endereco"]);
    $ca->setTelefone($data["telefone"]);

    $caDao->create($ca);
    header("Location: ../view/gerenciarSistema.php#tab2");
}
?>