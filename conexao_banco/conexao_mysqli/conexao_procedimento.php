<?php
// Definição das credencias e acesso ao banco de dados
    $nomeservidor = "localhost";  // Endereço do Servidor MySQL
    $usuario = "root";  // Nome do Usuário do MySQL
    $senha = "";  // Senha do Banco de Dados
    $bancodedados = "empresa";  // Nome do Banco de Dados

// Criação da conexão com MySQLi
    $conn = mysqli_connect($nomeservidor, $usuario, $senha, $bancodedados);

// Verificação da conexão
    // Caso a conexão falhe, exibe uma mensagem de erro
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

// Configuração do conjunto de caracteres para evitar problemas de acentuação
    mysqli_set_charset($conn, "utf8mb4");

// Mensagem indicando que a conexão foi estabelecida corretamente
    echo "Conexão bem-sucedida! <br><br>";

// Consulta SQL para obter clientes
    $sql = "SELECT id_cliente, nome, email FROM cliente";
    $result = mysqli_query($conn, $sql);

// Verifica se há resultados na consulta
    if (mysqli_num_rows($result) > 0) {
        // Exibe os resultados na tela
        while ($linha = mysqli_fetch_assoc($result)) {
            echo "ID: " . $linha["id_cliente"] . " - Nome: " . $linha["nome"] . " - E-mail: " . $linha["email"] . "<br>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

// Fecha a conexão com o banco de dados
    mysqli_close($conn);
?>