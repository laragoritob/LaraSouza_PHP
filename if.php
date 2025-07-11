<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> IF </title>
</head>
<body>
    <?php
        $nome = "Mariska";
        # $nome = NULL;

        # ISSET serve para verificar se uma variável é nula ou não
        if (isset($nome)) {
            print "Essa linha não será 'printada' se $nome for 'NULL'";
        }
    ?>
</body>
</html>