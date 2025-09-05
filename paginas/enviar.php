<?php
// Inclui o arquivo de conexão com o banco de dados
include_once('../bc.d_contato/banco_dados.php');

// Verificar se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processar formulário quando enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coletar e sanitizar os dados do formulário
    $nome = mysqli_real_escape_string($conn, $_POST['nome'] ?? '');
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone'] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    $qtdpessoas = mysqli_real_escape_string($conn, $_POST['qtdpessoas'] ?? '');
    $local = mysqli_real_escape_string($conn, $_POST['local'] ?? '');
    $tipo_evento = mysqli_real_escape_string($conn, $_POST['tipo_evento'] ?? '');
    $data_evento = mysqli_real_escape_string($conn, $_POST['date'] ?? '');
    $hora_evento = mysqli_real_escape_string($conn, $_POST['hora'] ?? '');
    $mensagem = mysqli_real_escape_string($conn, $_POST['mensagem'] ?? '');
    
    // Extrair número de convidados para o campo num_convidados
    $num_convidados = 0;
    if (preg_match('/(\d+)/', $qtdpessoas, $matches)) {
        $num_convidados = (int)$matches[1];
    }
    
    // Definir status inicial
    $status = 'pendente';

    // Preparar e executar a query SQL
    $sql = "INSERT INTO reservas (nome, telefone, email, data_evento, hora_evento, tipo_evento, num_convidados, local_evento, observacoes, status) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    // Verificar se a preparação foi bem sucedida
    if ($stmt === false) {
        die('Erro na preparação da query: ' . $conn->error);
    }
    
    // Bind parameters
    $stmt->bind_param("ssssssisss", $nome, $telefone, $email, $data_evento, $hora_evento, $tipo_evento, $num_convidados, $local, $mensagem, $status);
    
    if ($stmt->execute()) {
        // Sucesso - redirecionar com mensagem de sucesso
        header('Location: contato.php?status=success');
        exit();
    } else {
        // Erro - redirecionar com mensagem de erro
        header('Location: contato.php?status=error&message=' . urlencode($stmt->error));
        exit();
    }
    
    $stmt->close();
    $conn->close();
} else {
    // Se não for POST, redirecionar
    header('Location: contato.php');
    exit();
}
?>