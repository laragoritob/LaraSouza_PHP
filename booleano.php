<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Booleano </title>
</head>
<body>
    <?php
        // Declara variável numérica 
        $umidade = 91;

        // Teste se $umidade maior que 90. Retorna um booleano
        $vaiChover = ($umidade > 90);

        // Testa d $vaiChover é verdadeiro
        if ($vaiChover) {
            echo "<p>Vai chover com toda certeza absoluta da Terra!</p>";
        }

        echo "<br><address><center> Lara Gorito Barbosa de Souza / Estudante / Técnico em Desenvolvimento de Sistemas </center></address>";
    ?>
</body>
</html>