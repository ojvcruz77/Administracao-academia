<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cliente</title>
    <link rel="stylesheet" href="telalogin.css">
</head>
<body>


    <div>
        <h1>Login Cliente</h1>
        
        <form action="testelogincliente.php" method="POST">
            <input type="text" placeholder="Nome" name="nome" id="nome">
            
            <br><br>

            <input type="password" placeholder="Senha" name="senha" id="senha">

            <br><br>
        
            <input class="logar" type="submit" name="submit" id="submit">
        </form>
        <br><br>

        <form action="cadastrocliente.php" method="post">
            <button class="cadcliente"> Cadastrar </button>
        </form>
    </div>
</body>
</html>
