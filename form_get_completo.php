<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORMULÁRIO COMPLETO GET </title>
</head>
<body>
    <form method="get" action="form_get_completo.php">
        <label> Nome: </label>
        <input type="text" name="nome"/>
        <br>    
        <label> Idade: </label>
        <input type="number" name="idade"/>
        <br>
        <input type="submit" value="Enviar"/>
    </form> 

    <?php
        if (isset($_GET['nome']) && isset($_GET['idade'])) {
            echo "Recebido o cliente " . $_GET['nome'];
            echo " que tem " . $_GET['idade'] . " anos.";
        };
    ?>
</body>
</html>