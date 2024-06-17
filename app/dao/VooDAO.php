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
}
?>