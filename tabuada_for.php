<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tabuada = array();

        for($i = 0; $i < 11; $i++) {
            for($n = 0; $n < 11; $n++) {
                $tabuada[$i][$n] = ($i * $n);
            }
        }

        for($i = 0; $i < 11; $i++) {
            for($n = 0; $n < 11; $n++) {
                echo $i . " x " . $n . " = " . $tabuada[$i][$n] . "<br/>";
            }
            echo "<br>";
        }

        echo "<br><br><br><address><center> Lara Gorito Barbosa de Souza / Estudante / Técnico em Desenvolvimento de Sistemas </center></address>";
    ?>
</body>
</html>