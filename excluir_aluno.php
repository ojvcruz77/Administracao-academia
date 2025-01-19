<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>
    
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "sistema_academia");

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Exclui o aluno do banco de dados
    $sql = "DELETE FROM alunos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "Aluno excluído com sucesso!";
    echo "<br><a href='index.php'>Voltar</a>";
}
?>

</body>
</html>
