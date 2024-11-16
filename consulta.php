<?php
$conn = new mysqli("localhost", "root", "", "sistema_consultas");

$result = $conn->query("
    SELECT c.data_consulta, c.horario_consulta, p.nome
    FROM consultas c
    JOIN pacientes p ON c.paciente_id = p.id
    ORDER BY c.data_consulta, c.horario_consulta
");

$consultas = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Agendadas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Consultas Agendadas</h2>
        <table border="1" width="100%">
            <tr>
                <th>Data</th>
                <th>Horário</th>
                <th>Paciente</th>
            </tr>
            <?php foreach ($consultas as $consulta): ?>
                <tr>
                    <td><?= $consulta['data_consulta'] ?></td>
                    <td><?= $consulta['horario_consulta'] ?></td>
                    <td><?= $consulta['nome'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
