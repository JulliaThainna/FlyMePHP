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

    //UPDATE
    public function update(){
        $data = filter_input_array(INPUT_POST);

        $this->usuario->setCpf($data["cpf"]);
        $this->usuario->setNome($data["nome"]);
        $this->usuario->setEmail($data["email"]);
        $this->usuario->setSenha($data["senha"]);
        $this->usuario->setTelefone($data["telefone"]);
        $this->usuario->setGenero($data["genero"]);
        $this->usuario->setDataNasc($data["data_nasc"]);

        $this->usuarioDAO->update($this->usuario);
        header("Location: ../view/Usuario/meuPerfil.php");
        exit(); 
    }

    //DELETE
    public function delete(Usuario $usuario, $tipo){
        $this->usuarioDAO->delete($usuario);
        if($tipo == 0){
            header("Location: ../view/gerenciarSistema.php#tab3");
        }
        else{
            session_start();
            session_unset();
            session_destroy();
            header("Location: ../view/index.php");
            exit();
        }
    }

    //LOGIN (SELECT WHERE)
    public function login(){
        $data = filter_input_array(INPUT_POST);
        $email = $data["email"];
        $senha = $data["senha"];

        $usuario = $this->usuarioDAO->verifyLogin($email, $senha);
        if($usuario){
            session_start();
            $_SESSION["usuario"] = $usuario;
            header("Location: ../view/Usuario/meuperfil.php");
        }
        else{
            print("Erro ao realizar login");
        }
        exit();
    }   
}

//Objetos
$usuario = new Usuario();
$usuarioController = new UsuarioController();

//Quando clicar no botão de cadastrar
if(isset($_POST["cadastrarUsuario"])){
    $usuarioController->create();
}

//Quando clicar no botão de deletar
if(isset($_POST["deletarUsuario"]) or isset($_POST["deletarConta"])){
    if($_POST["deletarUsuario"]){
        $usuario->setCpf($_POST["deletarUsuario"]);
        $tipo = 0;
    }
    else{
        $usuario->setCpf($_POST["deletarConta"]);
        $tipo = 1;
    }
    $usuarioController->delete($usuario, $tipo);
}

//Quando clicar no botão entrar
if(isset($_POST["logarUsuario"])){
    $usuarioController->login();
}

//Quando clicar no botão editar perfil
if(isset($_POST["editarConta"])){
    $usuarioController->update();
}
?>