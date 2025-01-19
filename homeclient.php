<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form action="treino.php" method="POST">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </p>
        <p>
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required>
        </p>
        <p>
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" step="0.01" required>
        </p>
        <p>
            <label for="altura">Altura (m):</label>
            <input type="number" id="altura" name="altura" step="0.01" required>
        </p>
        <p>
            <label for="plano"> Objetivo:</label>
            <input type="text" id="plano" name="plano" required placeholder="emagrecer,hipertrofia ou manter">
        </p>
        <button type="submit">Cadastrar</button>
    </form>
</body>

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
    header('Location: treino.php');
}
?>

</html>

