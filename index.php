<?php
$conn = new mysqli("localhost", "root", "", "sistema_consultas");

// Exclusão de consulta
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM consultas WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    header( "Location: index.php");
    exit;
}

// Recuperar todas as consultas
$result = $conn->query("
    SELECT c.id, c.data_consulta, c.horario_consulta, p.nome
    FROM consultas c
    JOIN pacientes p ON c.paciente_id = p.id
    ORDER BY c.data_consulta, c.horario_consulta
");

$consultas = $result->fetch_all( MYSQLI_ASSOC);
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
        <a href="marcacao.php"><button>Criar Nova Consulta</button></a>
        <a href="cadastro.php"><button>Cadastrar novo paciente</button></a>
        <table border="1" width="100%" style="margin-top: 20px;">
            <tr>
                <th>Data</th>
                <th>Horário</th>
                <th>Paciente</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($consultas as $consulta): ?>
                <tr>
                    <td><?= $consulta['data_consulta'] ?></td>
                    <td><?= $consulta['horario_consulta'] ?></td>
                    <td><?= $consulta['nome'] ?></td>
                    <td>
                        <a href="index.php?delete_id=<?= $consulta['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir esta consulta?');">
                            <button style="background-color: red; color: white;">Excluir</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
