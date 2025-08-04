<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de Funcionários </title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1> Cadastro </h1>
        <h2> Funcionário </h2>

    <!-- Formulário para cadastrar um funcionário -->
        <form action="salvar_func.php" method="post" enctype="multipart/form-data">
            <!-- Campo para inserir o nome do funcionário -->
            <label for="nome"> Nome: </label>
            <input type="text" name="nome" id="nome" required><br><br>

            <!-- Campo para inserir o telefone do funcionário -->
            <label for="telefone"> Telefone: </label>
            <input type="text" name="telefone" id="telefone" required><br><br>

            <!-- Campo para inserir a foto do funcionário -->
            <label for="foto"> Foto: </label><br>
            <input type="file" name="foto" id="foto" required><br><br>

            <!-- Botão para cadastrar o funcionário -->
             <button type="submit"> Cadastrar </button>
        </form>
    </div>
</body>
</html>