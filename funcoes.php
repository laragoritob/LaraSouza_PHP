<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        # RAND - Gera um número inteiro aleatório
        $sorteio = rand(0, 5);
        echo "Sorteado: $sorteio <hr/>";

        # ARRAY_MERGE - Combina um ou mais arrays
        # RANGE - Cria umarray contendo uma faixa de elementos
        # (Inicio, Fim, Passo)
        $vetor = array_merge(range(0, 10), range($sorteio, 10, 2), array($sorteio));
        print_r($vetor);
        echo "<hr/>";
        
        # SHUFFLE - Embaralha
        shuffle($vetor);
        # PRINT_R - Imprime o índice do array
        print_r($vetor); 
        echo "<hr/>";

        echo "<br><br><br><address><center> Lara Gorito Barbosa de Souza / Estudante / Técnico em Desenvolvimento de Sistemas </center></address>";
    ?>
</body>
</html>