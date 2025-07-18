<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exemplo POST </title>
    <style type="text/css">
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <form method="post" action="criptografia.php">
        <label> Usuário: </label>
        <input type="text" name="usuario" required />

        <br>

        <label> Senha: </label>
        <input type="password" name="senha" required />

        <br><br>

        <input type="submit" value="Enviar" name="enviar" />
        <input type="reset" value="Limpar" name="limpar" />
    </form>
</body>
</html>