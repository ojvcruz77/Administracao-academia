<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "sistema_consultas");

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Insere os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, peso, altura) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdd", $nome, $peso, $altura);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "Usuário cadastrado com sucesso!";
    echo "<br><a href='index.html'>Voltar</a>";
}
?>
