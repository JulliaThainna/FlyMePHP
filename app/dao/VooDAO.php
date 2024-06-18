<?php
class VooDAO{
    private $conn;

    public function __construct(){
        $this->conn = ConnectionFactory::getConnection();
    }

    public function create(Voo $voo){
        try{    
            $sql = "INSERT INTO voo (companhia_aerea_id, origem, destino, data_horario, duracao, assentos, valor) VALUES
                    (:companhia_aerea_id, :origem, :destino, :data_horario, :duracao, :assentos, :valor)";

            $query = $this->conn->prepare($sql);

            $query->bindValue(":companhia_aerea_id", $voo->getCompanhiaAereaId());
            $query->bindValue(":origem", $voo->getOrigem());
            $query->bindValue(":destino", $voo->getDestino());
            $query->bindValue(":data_horario", $voo->getDataHorario());
            $query->bindValue(":duracao", $voo->getDuracao());
            $query->bindValue(":assentos", $voo->getAssentos());
            $query->bindValue(":valor", $voo->getValor());

            return $query->execute();
        }catch(Exception $exception){
            print("<p>Erro ao cadastrar Voo: $exception</p>");
        }
    }

    public function listarVoos($item){
        $voo = new Voo();
        $voo->setId($item['id']);   
        $voo->setCompanhiaAereaId($item["companhia_aerea_id"]);
        $voo->setOrigem($item["origem"]);
        $voo->setDestino($item["destino"]);
        $voo->setDataHorario($item["data_horario"]);
        $voo->setDuracao($item["duracao"]);
        $voo->setAssentos($item["assentos"]);
        $voo->setValor($item["valor"]);

        return $voo;
    }
    public function read(){
        try{
            $sql = "SELECT * FROM voo";
            $resultQuery = $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            $listVoos = [];
            foreach($resultQuery as $item){
                $listVoos[] = $this->listarVoos($item);
            }
            return $listVoos;
        }catch(Exception $exception){
            print("Erro ao listar Voos cadastrados: $exception");
        }
    }

    public function update(Voo $voo){
        try{
            $sql = "UPDATE voo SET companhia_aerea_id = :companhia_aerea_id, origem = :origem, destino = :destino, 
                        data_horario = :data_horario, duracao = :duracao, assentos = :assentos, valor = :valor WHERE id = :id";
            $query = $this->conn->prepare($sql);
            
            $query->bindValue(":id", $voo->getId());
            $query->bindValue(":companhia_aerea_id", $voo->getCompanhiaAereaId());
            $query->bindValue(":origem", $voo->getOrigem());
            $query->bindValue(":destino", $voo->getDestino());
            $query->bindValue(":data_horario", $voo->getDataHorario());
            $query->bindValue(":duracao", $voo->getDuracao());
            $query->bindValue(":assentos", $voo->getAssentos());
            $query->bindValue(":valor", $voo->getValor());
            
            return $query->execute();
    }catch(Exception $exception){   
            print("Erro ao editar Voo: $exception");
        }
    }

    public function delete(Voo $voo){
        try{
            $sql = "DELETE FROM voo WHERE id = :id";
            $query = $this->conn->prepare($sql);
            $query->bindValue(":id", $voo->getId());
            return $query->execute();
        }catch(Exception $exception){
            print("Erro ao deletar Voo: $exception");
        }
    }

    public function getAllCompanhiasAereas(){
        try{
            $sql = "SELECT id, nome FROM companhia_aerea";
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $exception){
            print("<p>Erro ao obter companhias aéreas: $exception</p>");
            return [];
        }
    }
}
?>