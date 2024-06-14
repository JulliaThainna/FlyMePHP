<?php 
class CompanhiaAereaDAO{

    public function create(CompanhiaAerea $ca){
        try {
            $sql = "INSERT INTO companhia_aerea (nome, cnpj, endereco, telefone) VALUES (:nome, :cnpj, :endereco, :telefone);";
            $con_sql = ConnectionFactory::getConnection()->prepare($sql);
            $con_sql->bindValue(":nome", $ca->getNome());
            $con_sql->bindValue(":cnpj", $ca->getCnpj());
            $con_sql->bindValue(":endereco", $ca->getEndereco());
            $con_sql->bindValue(":telefone", $ca->getTelefone());
            return $con_sql->execute();
        }catch(Exception $exception){
            print("<p>Erro ao cadastrar Companhia Aérea: $exception</p>");
        }
    }
    public function listarCAs($item){
        $ca = new CompanhiaAerea();
        $ca->setId($item['id']);
        $ca->setNome($item['nome']);
        $ca->setCnpj($item['cnpj']);
        $ca->setEndereco($item['endereco']);
        $ca->setTelefone($item['telefone']);

        return $ca;
    }

    public function read(){
        try{
            $sql = "SELECT * FROM companhia_aerea";
            $result = (ConnectionFactory::getConnection()->query($sql))->fetchAll(PDO::FETCH_ASSOC);
            $listCAs = [];
            foreach($result as $item){
                $listCAs[] = $this->listarCAs($item);
            }
            return $listCAs;
        }catch(Exception $exception){
            print("<p>Erro ao listar as Companhias Aéreas cadastradas $exception <p/>");
        }
    }
}
?>