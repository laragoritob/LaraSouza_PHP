<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FOR </title>
</head>
<body>
    <?php
        print "<h2> TABUADA DO JEITO MAIS 'DIFÍCIL' </h2>";

        for ($i = 1; $i < 11; $i++) {
            print "$i x 1 = " . $i * 1 . "<br/>";
            print "$i x 2 = " . $i * 2 . "<br/>";
            print "$i x 3 = " . $i * 3 . "<br/>";
            print "$i x 4 = " . $i * 4 . "<br/>";
            print "$i x 5 = " . $i * 5 . "<br/>";
            print "$i x 6 = " . $i * 6 . "<br/>";
            print "$i x 7 = " . $i * 7 . "<br/>";
            print "$i x 8 = " . $i * 8 . "<br/>";
            print "$i x 9 = " . $i * 9 . "<br/>";
            print "$i x 10 = " . $i * 10 . "<br/><br/>";
        }
    ?>

    <!-- OUTRA MANEIRA DE FAZER -->

    <?php
        print "<h2> TABUADA DO JEITO PRÁTICO E TÉCNICO </h2>";

        for ($i = 1; $i < 11; $i++) {
            for ($n = 1; $n < 11; $n++) {
                print "$i x $n = " . $i * $n . "<br/>";
            }
            print "<br/>";
        }

        echo "<br><address><center> Lara Gorito Barbosa de Souza / Estudante / Técnico em Desenvolvimento de Sistemas </center></address>";
    ?>
</body>
</html>