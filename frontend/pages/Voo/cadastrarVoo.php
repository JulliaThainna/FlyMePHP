<?php
    require '../../../database/conectDatabase.php';
    //$ca = $_POST["ca"];
    $origem = $_POST["origem"];
    $destino = $_POST["destino"];
    $datahora = $_POST["datahora"];
    $duracao = $_POST["duracao"];
    $assentos = $_POST["assentos"];
    $valor = $_POST["valor"];
    $sql = "INSERT INTO voo (origem, destino, data_horario, duracao, assentos, valor) VALUES ('$origem', '$destino', '$datahora', '$duracao', '$assentos', '$valor')";
    
    $database->query($sql);
    if($database->affected_rows >= 1){
        echo "Voo cadastrado com sucesso";
    }

    $database->close();
?>