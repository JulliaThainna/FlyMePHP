<?php 
class CompanhiaAereaDAO{
    private $conn;

    public function __construct(){
        $this->conn = ConnectionFactory::getConnection();
    }

    public function create(CompanhiaAerea $ca){
        try {
            $sql = "INSERT INTO companhia_aerea (nome, cnpj, endereco, telefone) VALUES (:nome, :cnpj, :endereco, :telefone);";
            $query = $this->conn->prepare($sql);
            $query->bindValue(":nome", $ca->getNome());
            $query->bindValue(":cnpj", $ca->getCnpj());
            $query->bindValue(":endereco", $ca->getEndereco());
            $query->bindValue(":telefone", $ca->getTelefone());
            return $query->execute();
        }catch(Exception $exception){
            print("<p>Erro ao cadastrar Companhia Aérea: $exception</p>");
        }
    }
    public function listarCAs($item){
        $ca = new CompanhiaAerea();
        $ca->setId($item["id"]);
        $ca->setNome($item["nome"]);
        $ca->setCnpj($item["cnpj"]);
        $ca->setEndereco($item["endereco"]);
        $ca->setTelefone($item["telefone"]);

        return $ca;
    }

    public function read(){
        try{
            $sql = "SELECT * FROM companhia_aerea";
            $resultQuery = $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            $listCAs = [];
            foreach($resultQuery as $item){
                $listCAs[] = $this->listarCAs($item);
            }
            return $listCAs;
        }catch(Exception $exception){
            print("<p>Erro ao listar as Companhias Aéreas cadastradas: $exception <p/>");
        }
    } 

    public function update(CompanhiaAerea $ca){
        try{
            $sql = "UPDATE companhia_aerea SET nome = :nome, cnpj = :cnpj, endereco = :endereco, telefone = :telefone WHERE id = :id";
            $query = $this->conn->prepare($sql);

            $query->bindValue(":id", $ca->getId());
            $query->bindValue(":nome", $ca->getNome());
            $query->bindValue(":cnpj", $ca->getCnpj());
            $query->bindValue(":endereco", $ca->getEndereco());
            $query->bindValue(":telefone", $ca->getTelefone());
            return $query->execute();
        }catch(Exception $exception){
            print("<p>Erro ao editar Companhia Aérea: $exception</p>");
        }
    }

    public function delete(CompanhiaAerea $ca){
        try{
            $sql = "DELETE FROM companhia_aerea WHERE id = :id";
            $query = $this->conn->prepare($sql);
            $query->bindValue(":id", $ca->getId());
            return $query->execute();
        }catch(Exception $exception){
            print("<p>Erro ao deletar Companhia Aérea: $exception </p>");
        }
    }
}
?>