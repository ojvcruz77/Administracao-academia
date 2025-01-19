<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ADM</title>
    <link rel="stylesheet" href="telalogin.css">
</head>
<body>
    

    <div>
        <h1>Login ADM</h1>
            <form action="testeloginadm.php" method="POST">
                <input type="text" placeholder="Nome" name="nomeadm" id="nomeadm">
                
                <br><br>

                <input type="password" placeholder="Senha" name="senhaadm" id="senhaadm">

                <br><br>

                <input class="logar" type="submit" name="submit" id="submit">

                <br><br>
            </form>

        <form action="cadastroadm.php" method="post">
            <button class="cadcliente"> Cadastrar </button>
        </form>
    </div>
</body>
</html>