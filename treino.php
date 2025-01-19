<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>TREINO</title>
</head>
<body>
<h1>Este é o Plano de Treino Ideal para você: </h1>
<br><br>
<style>
        body {
            font-family: Arial, sans-serif;
            display: block;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        textarea {
            
        }

        textarea:focus {
            outline: none;
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
        }

        h1 {
            text-align: center;
            color: #333;
        }
    </style>

<?php


$plano1 = $_POST['plano'];


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "sistema_academia");

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Consulta os detalhes do aluno
    $sql = "SELECT * FROM alunos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($id, $nome, $idade, $peso, $altura, $plano);
    $stmt->fetch();
    $stmt->close();
    $conn->close();
}
if ($plano1 == "emagrecer"){
    $treino = "1. Agachamento com Salto (Jump Squat)
   Duração: 30 segundos
   Execução: Realize um agachamento e, ao subir, dê um salto para cima, aterrissando suavemente. Retorne à posição de agachamento imediatamente.
   Benefício: Trabalha as pernas e glúteos, além de aumentar a frequência cardíaca.
   2. Flexão de Braços (Push-ups)
   Duração: 30 segundos
   Execução: Com as mãos no chão na largura dos ombros, abaixe o corpo até o peito quase tocar o chão e empurre de volta. Pode ser feito com os joelhos no chão se necessário.
   Benefício: Trabalha peito, ombros, tríceps e core.
   3. Burpee
   Duração: 30 segundos
   Execução: Comece em pé, agache e coloque as mãos no chão, pule com os pés para trás, ficando na posição de prancha. Realize uma flexão (opcional), retorne os pés à posição inicial e salte para cima.
   Benefício: Trabalha o corpo todo, melhora o condicionamento cardiovascular e aumenta a queima calórica.
   4. Mountain Climbers
   Duração: 30 segundos
   Execução: Na posição de prancha, traga um joelho em direção ao peito e depois troque rapidamente de perna, simulando uma corrida.
   Benefício: Trabalha o core, ombros e pernas, além de melhorar a resistência cardiovascular.
   Instruções de Treino
   Formato: Realize cada exercício por 30 segundos, seguido de 10 a 15 segundos de descanso entre os exercícios.
   Descanso entre circuitos: Após completar o circuito completo (4 exercícios), descanse de 1 a 2 minutos antes de repetir.
   Séries: Faça 3 a 4 circuitos, dependendo da sua capacidade física.
   Progressão: Conforme for ganhando resistência, aumente o tempo de execução para 40-45 segundos por exercício e diminua o tempo de descanso entre os circuitos.
   
   Emagrecer";
   print_r($treino);
   }
   if ($plano1 == "hipertrofia"){
    $treino = "Treino ABCD 
A - Peitoral e Tríceps

Supino Reto – 4x8-10
Supino Inclinado com Halteres – 4x10-12
Crucifixo Inclinado – 3x12-15
Mergulho em Paralelas (foco no peitoral) – 3x10-12
Tríceps Testa – 4x8-10
Tríceps Pulley – 3x12-15
B - Costas e Bíceps

Levantamento Terra – 4x6-8
Remada Curvada com Barra – 4x8-10
Puxada Aberta – 4x10-12
Remada Unilateral com Halter – 3x12-15
Rosca Direta – 4x8-10
Rosca Martelo – 3x12-15
C - Pernas

Agachamento Livre – 4x6-8
Leg Press 45° – 4x10-12
Afundo com Halteres – 3x12-15
Extensão de Perna – 3x12-15
Flexão de Perna – 3x12-15
Panturrilha em Pé – 4x15-20
D - Ombros e Abdômen

Desenvolvimento Militar com Barra – 4x8-10
Elevação Lateral – 4x12-15
Elevação Frontal com Halteres – 3x12-15
Encolhimento com Barra – 4x15-20
Abdominal Infra – 3x20
Prancha – 3x máximo tempo possível
Dicas
Progressão de Carga: Sempre que possível, aumente gradativamente o peso.
Descanso: 60 a 90 segundos entre as séries.
Aquecimento: Faça aquecimento antes de iniciar o treino para evitar lesões.
Frequência: Pode ser feito 4 a 5 vezes por semana, com descanso no fim de semana ou conforme necessário.

Hipertrofia";
print_r($treino);
   }

   if ($plano1 == "manter"){
    $treino = "Dia A: Peito, Ombro e Tríceps
1. Supino Reto com Barra
4 séries de 8-10 repetições
Foco: Peito (principalmente pectoral maior)
2. Supino Inclinado com Halteres
4 séries de 10-12 repetições
Foco: Peito superior
3. Desenvolvimento com Halteres
4 séries de 8-10 repetições
Foco: Ombros (deltoide anterior e medial)
4. Crucifixo (Fly) com Halteres
3 séries de 12-15 repetições
Foco: Peito
5. Mergulho (Dips)
3 séries de 8-12 repetições
Foco: Tríceps (pode ser feito com peso adicional)
6. Tríceps na Polia Alta (Corda)
3 séries de 12-15 repetições
Foco: Tríceps
Dia B: Costas e Bíceps
1. Puxada na Polia Alta (Pulldown)
4 séries de 8-10 repetições
Foco: Costas (principalmente o latíssimo do dorso)
2. Remada Curvada com Barra
4 séries de 8-10 repetições
Foco: Costas (músculos médios e superiores)
3. Remada Unilateral com Halteres
3 séries de 10-12 repetições (cada lado)
Foco: Costas (lats e romboides)
4. Barra Fixa (Pull-up)
3 séries de 6-10 repetições (com ou sem peso adicional)
Foco: Costas e bíceps
5. Rosca Direta com Barra
4 séries de 10-12 repetições
Foco: Bíceps
6. Rosca Alternada com Halteres
3 séries de 12-15 repetições
Foco: Bíceps
Dia C: Pernas e Abdômen
1. Agachamento com Barra
4 séries de 8-10 repetições
Foco: Quadríceps, glúteos e core
2. Leg Press
4 séries de 10-12 repetições
Foco: Quadríceps, glúteos e posterior de coxa
3. Cadeira Extensora
3 séries de 12-15 repetições
Foco: Quadríceps
4. Mesa Flexora (Hamstring Curl)
4 séries de 10-12 repetições
Foco: Posterior de coxa
5. Afundo (Lunge) com Halteres
3 séries de 10-12 repetições (cada perna)
Foco: Glúteos e coxas
6. Abdominais (Crunch)
4 séries de 15-20 repetições
Foco: Abdômen superior
7. Elevação de Pernas
3 séries de 15-20 repetições
Foco: Abdômen inferior
Instruções Gerais:
Descanso: 60 a 90 segundos entre as séries.
Progressão: Tente aumentar o peso a cada semana ou a cada duas semanas, mantendo a boa forma nos exercícios.
Repetições: Para o treino de força, foque em 6-8 repetições; para hipertrofia, 8-12 repetições; e para resistência muscular, 12-15 repetições.
Frequência: Treine 3 vezes por semana, com pelo menos 1 dia de descanso entre os treinos (exemplo: segunda, quarta e sexta).

Manter
";

print_r($treino);

   }



?>
</body>
</html>