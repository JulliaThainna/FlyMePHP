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

    public function read(){
        try{
            $sql = "SELECT * FROM companhia_aerea";
            $listCA = (ConnectionFactory::getConnection()->query($sql))->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $exception){
            //
        }
    }
}
?>