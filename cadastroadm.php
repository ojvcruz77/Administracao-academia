<?php
    if(isset($_POST['submitadm'])){
    

    include_once('config.php');

    $nome = ($_POST['nomeadm']);
    $email = ($_POST['emailadm']);
    $senha = ($_POST['senhaadm']);

    $result = mysqli_query($conexao, "INSERT INTO adms(nome,email,senha) 
    VALUES ('$nome','$email','$senha')");
    }

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro ADM</title>
    <link rel="stylesheet" href="telalogin.css">
</head>
<body>
    

    <div class="inputBox">
        <form action="cadastroadm.php" method="POST">    
            <h1>Cadastro para Administradores:</h1>
            <input type="text" placeholder="Nome" name="nomeadm" id="nomeadm" >
            <label for="nome" ></label>
            <br><br>

            <input type="text" placeholder="Email" name="emailadm" id="emailadm" >
            <label for="email" ></label>
            <br><br>

            <input type="password" placeholder="Senha" name="senhaadm" id="senhaadm" >
            <label for="senha" ></label>
            <br><br>
            
            <input type="submit" class="submitadm" name="submitadm" id="submitadm">
        </form>
    </div>
</body>
</html>