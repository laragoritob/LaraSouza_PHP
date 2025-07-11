<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> String </title>
</head>
<body>
    <?php
        $idade = 16;

        print "Você tem " . $idade . " anos. <br>"; 
        print "Você tem $idade anos. <br>"; // STRINGS DENTRO DE ASPAS SÃO INTERPRETADAS //
        print 'Você tem $idade anos. <br>'; // STRINGS EM ASPAS SIMPLES NÃO SÃO INTERPRETADAS //
        print "Hoje é seu $idadeº aniversário. <br>"; // NÃO FUNCIONA POR CAUSA DO º ESTAR JUNTO DA VARIÁVEL //
        print "Hoje é seu {$idade}º aniversário. <br>"; // { } SERVE PARA SEPARAR A VARIÁVEL DO TEXTO //
    ?>

    <br><br>

    <?php
        $cidade = "Petrópolis";
        $estado = "RJ";
        $idade = 182;
        $frase_capital = "A cidade de $cidade é serrana e faz parte do estado do $estado. <br>";
        $frase_idade = "$cidade tem mais de $idade anos. <br>";
        
        echo "<h3>$frase_capital</h3>";
        echo "<h4>$frase_idade</h4>";

        echo "<br><address><center> Lara Gorito Barbosa de Souza / Estudante / Técnico em Desenvolvimento de Sistemas </center></address>";
    ?>
</body>
</html>