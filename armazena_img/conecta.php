<?php
// Configura o banco de dados 
    $endereco ="localhost";
    $usuario = "root";
    $senha = "";
    $banco = "armazena_imagem";

// Criando a conexão usando MySQLi
    $conexao = new mysqli($endereco, $usuario, $senha, $banco);
    
// Verificar se houve erro de conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }
?>