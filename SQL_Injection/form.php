<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Sem Segurança </h1>

    <form action="login_inseguro.php" method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <button type="submit"> Entrar </button>
    </form>

    <br><br><br>

    <h1> Com Segurança </h1>
    
    <form action="login_seguro.php" method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <button type="submit"> Entrar </button>
    </form>

    <br><br><br><br>

    <address> Lara Gorito Barbosa de Souza / Técnico em Desenvolvimento de Sistemas </address>
</body>
</html>