<?php
    require '../../../database/conectDatabase.php';
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $genero = $_POST["genero"];
    $data_nasc = $_POST["data_nasc"];
    $sql = "INSERT INTO usuario (cpf, nome, email, senha, telefone, genero, data_nasc) VALUES ('$cpf', '$nome', '$email', '$senha', '$telefone', '$genero', '$data_nasc')";
    
    $database->query($sql);
    if($database->affected_rows >= 1){
        echo 'Usuário cadastrado com sucesso!';
    }

    $database->close();
?>