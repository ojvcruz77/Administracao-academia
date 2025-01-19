<?php
$conn = new mysqli("localhost", "root", "", "sistema_consultas");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO pacientes (nome, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $nome, $email);

    if ($stmt->execute()) {
        header("Location: marcacao.php");
        exit;
    } else {
        $erro = "Erro ao cadastrar. Tente outro e-mail.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Paciente</h2>
        <form method="POST">
            <input type="text" name="nome" placeholder="Nome Completo" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <button type="submit">Cadastrar</button>
            <a href="index.php"><button>Visualizar consultas</button></a>

        </form>
        <?php if (!empty($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
    </div>
</body>
</html>
