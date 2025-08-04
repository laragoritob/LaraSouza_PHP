<?php
    require('conecta.php');
    
    // Obtém o ID da imagem da URL, garantindo que seja um número inteiro
    $id_imagem = isset($_GET['id'])? intval($_GET['id']) : 0;

    // Verifica se o ID é válido (maior que zero)
    if ($id_imagem > 0) {
        // Criar a query segura usando o prepared statement
        $queryExclusao = "DELETE FROM imagens WHERE codigo = ?";

        // Prepara a query
        $stmt = $conexao->prepare($queryExclusao);
        $stmt->bind_param("i", $id_imagem); // Define o id como um inteiro

        // Executa a exclusão
        if ($stmt->execute()) {
            echo "Imagem excluída com sucesso!";
        } else {
            die("Erro ao excluir a imagem." . $stmt->error);
        }

        // Fecha a consulta
        $stmt->close();
    } else {
        echo "ID Inválido.";
    }

    // Redireciona para a index.php e garante que o script pare
    header("Location: index.php");
    exit();
?>