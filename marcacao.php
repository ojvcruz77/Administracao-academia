<?php
$conn = new mysqli("localhost", "root", "", "sistema_consultas");

// Buscar pacientes
$result = $conn->query("SELECT * FROM pacientes");
$pacientes = $result->fetch_all(MYSQLI_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paciente_id = $_POST['paciente_id'];
    $data_consulta = $_POST['data_consulta'];
    $horario_consulta = $_POST['horario_consulta'];

    // Verificar se o horário está disponível
    $stmt = $conn->prepare("SELECT * FROM consultas WHERE data_consulta = ? AND horario_consulta = ?");
    $stmt->bind_param("ss", $data_consulta, $horario_consulta);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $erro = "Horário indisponível. Escolha outro.";
    } else {
        $stmt = $conn->prepare("INSERT INTO consultas (paciente_id, data_consulta, horario_consulta) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $paciente_id, $data_consulta, $horario_consulta);

        if ($stmt->execute()) {
            // Redirecionar para a página inicial
            header("Location: index.php");
            exit;
        } else {
            $erro = "Erro ao marcar a consulta.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcar Consulta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Marcar Consulta</h2>
        <form method="POST">
            <select name="paciente_id" required>
                <option value="">Selecione um paciente</option>
                <?php foreach ($pacientes as $paciente): ?>
                    <option value="<?= $paciente['id'] ?>"><?= $paciente['nome'] ?></option>
                <?php endforeach; ?>
            </select>
            <input type="date" name="data_consulta" required>
            <input type="time" name="horario_consulta" required>
            <button type="submit">Marcar Consulta</button>
        </form>
        <?php 
            if (!empty($erro)) echo "<p style='color:red;'>$erro</p>"; 
        ?>
    </div>
</body>
</html>

