<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_clean(); //LIMPA QUALQUER SAIDA INESPERADA DP HEADER

//INICIA A CONEXÃO COM O  BANDO DE DADOS 
require("conecta.php");

//OBTEM O id SA IMAGEM DA URL, GARANTINDO QUE SEJA UM NÚMERO INTEIRO
$id_imagem = isset($_GET['id'])? intval($_GET['id']):0;

//CRIA A CONSULTA PARA BUSCAR A IAMGEM NO BANCO DE DADOS

$querySelecionaPorCodigo= "SELECT imagem, tipo_imagem FROM imagens WHERE codigo = ?";

//USA PREPARED STATMENT PARA MAIOR SEGURANÇA
$stmt= $conexao-> prepare($querySelecionaPorCodigo);
$stmt-> bind_param("i", $id_imagem);
$stmt-> execute();
$resultado= $stmt-> get_result(); 

//verifica se a imagem exite o banco de dados
if($resultado-> num_rows > 0){
    $imagem= $resultado-> fetch_object();

//DEFINE O TIPO CORRETO DA IMAGEM )fallback jpeg CASO ESTEJA VAZIO
$tipo_imagem = !empty($imagem-> tipo_imagem)? $imagem-> tipo_imagem: "imagem.jpeg"; 
header("Content-type: ". $tipo_imagem);

//EXIBE A IMAGEM ARMAZENADA NO BANCO DE DADOS 
    echo $imagem-> imagem;
}
else{
    echo "Imagem não encontrada";
}

//FECHA A CONSULTA
$stmt = close();
?>