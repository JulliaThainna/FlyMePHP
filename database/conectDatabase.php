<?php
    $database = new mysqli(
        "localhost", "root", "", "upets", "3307" 
    );
    if($database->connect_errno){
        echo "Erro ao conetar no banco de dados";
    }else{
        echo "Conectado com sucesso";
    }
    //$banco->close();
?>