<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        echo "Hello World of PHP!<br>";
        
        $cons = str_replace($vogais, "", "Hello World of PHP!"); // substitui vogais por nada
        echo "Consoantes: " . $cons . "<br>";

        // 0 1 2 3 4 5 6 7 8 9 0 1 //
        $test = "Hello World! \n";
        print "Posição da letra 'o' : ";
        print strpos($test, "o") . "<br/>";

        print "Posição da letra 'o' após 5ª posição: ";
        print strpos($test, "o", 5) . "<hr/>";

        $message = "Troca letra uma a uma";
        echo $message . "<br/>";
        
        $new_message = strtr($message, "abcdef", '123456');
        echo "Criptografando: " . $new_message . "<br/>";

        $new_message = strtr($message, "123456", "abcdef");
        echo "Descriptografando: " . $new_message . "<br/>";

        echo "<br><br><br><address><center> Lara Gorito Barbosa de Souza / Estudante / Técnico em Desenvolvimento de Sistemas </center></address>";
    ?>
</body>
</html>