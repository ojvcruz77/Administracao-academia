<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração da Academia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Administração da Academia</h1>
    <h2>Lista de Alunos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Plano</th>
                <th>Detalhes</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexão com o banco de dados
            $conn = new mysqli("localhost", "root", "", "sistema_academia");
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }
            // Consulta os alunos cadastrados
            $sql = "SELECT id, nome, idade, plano FROM alunos";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nome"] . "</td>";
                    echo "<td>" . $row["idade"] . "</td>";
                    echo "<td>" . $row["plano"] . "</td>";
                    echo "<td><a href='detalhes_aluno.php?id=" . $row["id"] . "'>Ver Detalhes</a></td>";
                    echo "<td><a href='excluir_aluno.php?id=" . $row["id"] . "' onclick=\"return confirm('Tem certeza que deseja excluir este aluno?');\">Excluir</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum aluno cadastrado</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <br><a href="cadastro_aluno.html">Cadastrar Novo Aluno</a>
</body>
</html>
