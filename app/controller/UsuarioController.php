<?php
include_once "../dao/connectionFactory.php";
include_once "../dao/UsuarioDAO.php";
include_once "../model/Usuario.php";

class UsuarioController{
    private $usuario;
    private $usuarioDAO;

    public function __construct(){
        $this->usuario = new Usuario();
        $this->usuarioDAO = new UsuarioDAO();
    }

    //INSERT
    public function create(){
        $data = filter_input_array(INPUT_POST);
        
        $this->usuario->setCpf($data["cpf"]);    
        $this->usuario->setNome($data["nome"]);
        $this->usuario->setEmail($data["email"]);
        $this->usuario->setSenha($data["senha"]);
        $this->usuario->setTelefone($data["telefone"]);
        $this->usuario->setGenero($data["genero"]);
        $this->usuario->setDataNasc($data["data_nasc"]);
    
        if($this->usuarioDAO->create($this->usuario)){
            header("Location: ../view/index.php?success=true");
            exit();
        }
        else{
            print("Erro ao realizar cadastro");
        }
    }

    //SELECT *
    public function read(){
        return $this->usuarioDAO->read();
    }
}

//Objetos
$usuarioController = new UsuarioController();

//Quando clicar no botão de cadastrar
if(isset($_POST["cadastrarUsuario"])){
    $usuarioController->create();
}
?>
