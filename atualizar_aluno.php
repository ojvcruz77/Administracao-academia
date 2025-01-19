<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
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

    // Atualiza os dados do aluno
    $sql = "UPDATE alunos SET nome=?, idade=?, peso=?, altura=?, plano=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siddsi", $nome, $idade, $peso, $altura, $plano, $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "Dados do aluno atualizados com sucesso!";
    echo "<br><a href='index.php'>Voltar</a>";
}
?>
