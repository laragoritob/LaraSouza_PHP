<?php
    // Configuração do banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "empresa_teste";

    // Conexão usando MySQLI sem proteção contra SQL Injection
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // Verifica se há erro na conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Captura os dados do formulário (nome do funcionário)
    $nome = $_POST['nome'];

    // Prepara a consulta SQL segura
    $stmt = $conexao->prepare("SELECT * FROM cliente_teste WHERE nome = ?");
    $stmt->bind_param("s", $nome); 
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Se houver resultados, o login é bem-sucedido
    if ($resultado->num_rows > 0) {
        header("Location: area_restrita.php");
        // Garante que o código pare aqui para evitar execução indevida
        exit();
    } else {
        echo "Nome não encontrado.";
    }

    // Fecha conexão com o banco de dados
    $stmt->close();
    $conexao->close();
?>