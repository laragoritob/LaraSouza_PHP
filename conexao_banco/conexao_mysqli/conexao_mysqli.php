<?php
// Habilita relatório detalhado do erro MySQLi
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    /*
        Função para conectar do banco de dados
        Retorna um objeto de conexao MySQLi ou interrompe o script em caso de erro 
    */

    function conectadb(){
    // Configura o banco de dados 
        $endereco ="localhost";
        $usuario = "root";
        $senha = "";
        $banco = "empresa";

        try{
        // Criação de conexão
            $con = new mysqli($endereco, $usuario, $senha, $banco);
        
        // Definição de conjunto de caracteres para evitar problemas de acentuação
            $con->set_charset("utf8mb4");  // Retorna o objeto de conexão
            return $con;
        } catch(Exception $e){
        // Exibe uma mensagem de erro e encerra o script
            die("Erro de conexão:". $e->getMenssage());
        }
    }
?>