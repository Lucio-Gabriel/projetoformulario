<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca Cadastro | IO</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>

    <h1 class="busca">Busca Cadastro | IO</h1>

    <div class="tela-login">
        <h1 class="txt1">Conecte-se</h1>

        <form action="testeLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>

    <a href="home.php" class="btnVoltar">Voltar</a>

</body>
</html>