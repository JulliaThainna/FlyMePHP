<?php
    require '../../../database/conectDatabase.php';
    $ca = $_POST["ca"];
    $origem = $_POST["origem"];
    $destino = $_POST["destino"];
    $datahora = $_POST["datahora"];
    $duracao = $_POST["duracao"];
    $assentos = $_POST["assentos"];
    $sql = "INSERT INTO usuario (ca, origem, destino, datahora, duracao, assentos) VALUES ('$ca', '$origem', '$destino', '$destino', '$datahora', '$duracao', '$assentos')";
    
    $database->query($sql);
    if($database->affected_rows >= 1){
        echo "deu bom";
    }

    $database->close();
?>