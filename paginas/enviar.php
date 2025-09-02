<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $nome = $_POST['nome'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $email = $_POST['email'] ?? '';
    $data_evento = $_POST['date'] ?? '';
    $hora_evento = $_POST['hora_evento'] ?? '';
    $tipo_evento = $_POST['tipo_evento'] ?? '';
    $num_convidados = $_POST['qtdpessoas'] ?? '';


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Preparar e executar o INSERT
    $stmt = $conn->prepare("INSERT INTO Reserva (nome, telefone, email, data_evento, hora_evento, tipo_evento, num_convidados) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $nome, $telefone, $email, $data_evento, $hora_evento, $tipo_evento, $num_convidados);

    if ($stmt->execute()) {
        echo "<script>alert('Reserva enviada com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Erro ao salvar a reserva: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
