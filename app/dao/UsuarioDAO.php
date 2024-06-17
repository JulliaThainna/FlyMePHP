<?php
class UsuarioDAO{
    private $conn;

    public function __construct(){
        $this->conn = ConnectionFactory::getConnection();
    }

    public function create(Usuario $usuario){
        try{
            $sql = "INSERT INTO usuario (cpf, nome, email, senha, telefone, genero, data_nasc) VALUES (:cpf, :nome, :email, :senha, :telefone, :genero, :data_nasc);";
            $query = $this->conn->prepare($sql);

            //Fazer hash na senha para segurança
            $hashedSenha = password_hash($usuario->getSenha(), PASSWORD_DEFAULT);

            $query->bindValue(":cpf", $usuario->getCpf());
            $query->bindValue(":nome", $usuario->getNome());
            $query->bindValue(":email", $usuario->getEmail());
            $query->bindValue(":senha", $hashedSenha);
            $query->bindValue(":telefone", $usuario->getTelefone());
            $query->bindValue(":genero", $usuario->getGenero());
            $query->bindValue(":data_nasc", $usuario->getDataNasc());

            return $query->execute();
        }catch(Exception $exception){
            print("<p>Erro ao realizar cadastro: $exception</p>");
        }
    }

    public function listarUsuarios($item){
        $usuario = new Usuario();
        $usuario->setNome($item["nome"]);
        $usuario->setCpf($item["cpf"]);
        $usuario->setEmail($item["email"]);
        $usuario->setSenha($item["senha"]);
        $usuario->setTelefone($item["telefone"]);
        $usuario->setGenero($item["genero"]);
        $usuario->setDataNasc($item["data_nasc"]);

        return $usuario;
    }
    public function read(){
        try{
            $sql = "SELECT * FROM usuario";
            $resultQuery = $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            $listUsuarios = [];
            foreach($resultQuery as $item){
                $listUsuarios[] = $this->listarUsuarios($item);
            }

            return $listUsuarios;
        }catch(Exception $exception){
            print("<p>Erro ao listar Usuários: $exception</p>");
        }
    }

    public function update(Usuario $usuario){
        try{
            $sql = "UPDATE usuario SET cpf = :cpf, nome = :nome, email = :email, senha = :senha, telefone = :telefone, genero = :genero, data_nasc = :data_nasc WHERE cpf = :cpf";
            $query = $this->conn->prepare($sql);
            
            $query->bindValue(":cpf", $usuario->getCpf());
            $query->bindValue(":nome", $usuario->getNome());
            $query->bindValue(":email", $usuario->getEmail());
            $query->bindValue(":senha", $usuario->getSenha());
            $query->bindValue(":telefone", $usuario->getTelefone());
            $query->bindValue(":genero", $usuario->getGenero());
            $query->bindValue(":data_nasc", $usuario->getDataNasc());

            return $query->execute();
        }catch(Exception $exception){
            print("<p>Erro ao editar Usuário: $exception</p>");
        }
    }

    public function delete(Usuario $usuario){
        try{
            $sql = "DELETE FROM usuario WHERE cpf = :cpf";
            $query = $this->conn->prepare($sql);
            $query->bindValue(":cpf", $usuario->getCpf());

            return $query->execute();
        }catch(Exception $exception){
            print("<p>Erro ao deletar usuário: $exception</p>");
        }
    }

    //LOGIN (SELECT WHERE)
    public function verifyLogin($email, $senha){
        try{
            $sql = "SELECT * FROM usuario WHERE email = :email";
            $query = $this->conn->prepare($sql);
            $query->bindValue(":email", $email);
            $query->execute();
            $usuario = $query->fetch(PDO::FETCH_ASSOC);
            if($usuario && password_verify($senha, $usuario["senha"])){
                return $usuario;
            }
            else{
                return false;
            }
        }catch(Exception $exception){
            print("<p>Erro ao fazer login: $exception</p>");
        }
    }
}
?>
