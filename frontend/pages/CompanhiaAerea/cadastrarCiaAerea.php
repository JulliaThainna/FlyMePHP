<?php
    require '../../../database/conectDatabase.php';
    $nome = $_POST["nome"];
    $cnpj = $_POST["cnpj"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $sql = "INSERT INTO companhia_aerea (nome, cnpj, endereco, telefone) VALUES ('$nome', '$cnpj', '$endereco', '$telefone')";
    
    $database->query($sql);
    if($database->affected_rows >= 1){
        echo 'Companhia aérea cadastrada com sucesso!';
    }

    $database->close();
?>