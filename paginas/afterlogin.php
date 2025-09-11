<?php
// Configurações de conexão ao banco
$host = "localhost";
$user = "root";      // altere conforme seu usuário MySQL
$pass = "";          // altere conforme sua senha MySQL
$db   = "buffet_db";  // nome do banco de dados

// Criar conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT id, nome, telefone, email, data_evento, hora_evento, tipo_evento, num_convidados, criado_em FROM reserva ORDER BY criado_em DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Reservas</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #007BFF; color: white; }
        tr:nth-child(even) { background: #f9f9f9; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>Reservas Registradas</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Tipo de Evento</th>
            <th>Convidados</th>
            <th>Criado em</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["telefone"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["data_evento"] . "</td>";
                echo "<td>" . $row["hora_evento"] . "</td>";
                echo "<td>" . $row["tipo_evento"] . "</td>";
                echo "<td>" . $row["num_convidados"] . "</td>";
                echo "<td>" . $row["criado_em"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>Nenhuma reserva encontrada</td></tr>";
        }
        ?>
    </table>
</body>
</html>
<?php $conn->close(); ?>
