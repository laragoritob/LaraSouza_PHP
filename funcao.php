<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Função </title>
</head>
<body>
    <?php
        $name = "Stefanie Hatcher"; 
        $length = strlen($name); // Num de caracteres //
        $cmp = strcmp($name, "Brian Le"); // Comparação de strings em ordem alfabética //
        $index = strpos($name, "e"); // Posição do caractere em uma string //
        $first = substr($name, 9, 5); // Parte de uma string //
        $name = strtoupper($name); // Tudo em maiúsculo

        echo("$name<br>"); 
        echo("$length<br>");
        echo("$cmp<br>");
        echo("$index<br>");
        echo("$first");

        echo "<br><address><center> Lara Gorito Barbosa de Souza / Estudante / Técnico em Desenvolvimento de Sistemas </center></address>";
    ?>
</body>
</html>