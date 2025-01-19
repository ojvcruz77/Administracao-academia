<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $plano = $_POST['plano'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "sistema_academia");

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }





    // Insere os dados no banco de dados
    $sql = "INSERT INTO alunos (nome, idade, peso, altura, plano) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sidds", $nome, $idade, $peso, $altura, $plano);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "Aluno cadastrado com sucesso!";
    echo "<br><a href='index.php'>Voltar</a>";
}
?>


</body>
</html>
