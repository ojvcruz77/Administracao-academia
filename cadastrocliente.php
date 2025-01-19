<?php
    if(isset($_POST['submit'])){
    

    include_once('config.php');

    $nome = ($_POST['nome']);
    $email = ($_POST['email']);
    $senha = ($_POST['senha']);

    $result = mysqli_query($conexao, "INSERT INTO clientes(nome,email,senha) 
    VALUES ('$nome','$email','$senha')");
    }

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="telalogin.css">
</head>
<body>
    

    <div class="inputBox">
        <form action="cadastrocliente.php" method="post">
            <h1>Cadastro para Clientes:</h1>
            <input type="text" placeholder="Nome" name="nome" id="nome" class="nome">
            <label for="nome" ></label>
            <br><br>

            <input type="text" placeholder="Email" name="email" id="email" class="email">
            <label for="email" ></label>
            <br><br>

            <input type="password" placeholder="Senha" name="senha" id="senha" class="senha">
            <label for="senha" ></label>
            <br><br>

            
            <input type="submit" class="submit" name="submit" id="submit">
        </form>

    </div>
</body>
</html>