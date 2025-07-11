<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Média </title>
</head>
<body>
    <?php
        // Declara variável numérica 
        $nota = 7;

        // Teste se $nota é maior que 7. Retorna um booleano
        $Aprovado = ($nota >= 7);
        $Recuperacao = ($nota < 7 & $nota >= 5);
        $Reprovado = ($nota < 5);

        // Testa d $vaiChover é verdadeiro
        if ($Aprovado) {
            echo "<h3>O aluno está aprovado!</h3>";
        } else if ($Recuperacao) {
            echo "<h3>O aluno está de recuperação!</h3>";
        } else if ($Reprovado) {
            echo "<h3>O aluno está reprovado!</h3>";
        } else {
            echo "<h3>O aluno não foi atribuido a nenhuma nota!</h3>";
        }

        echo "<br><address><center> Lara Gorito Barbosa de Souza / Estudante / Técnico em Desenvolvimento de Sistemas </center></address>";
    ?>
</body>
</html>