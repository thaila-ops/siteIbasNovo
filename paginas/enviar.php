<?php
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

function limpaTexto($texto) {
    return trim(strip_tags($texto));
}

// Dados do formulário
$nome        = limpaTexto($_POST['nome'] ?? '');
$email       = limpaTexto($_POST['email'] ?? '');
$telefone    = limpaTexto($_POST['telefone'] ?? '');
$qtdpessoas  = limpaTexto($_POST['qtdpessoas'] ?? '');
$local       = limpaTexto($_POST['local'] ?? '');
$data_evento = limpaTexto($_POST['date'] ?? '');
$mensagem    = limpaTexto($_POST['mensagem'] ?? '');
$tipo_evento = $_POST['tipo_evento'] ?? '';
if (is_array($tipo_evento)) {
    $tipo_evento = implode(', ', $tipo_evento);
}

// Validação simples
$erros = [];
if (empty($nome)) $erros[] = 'Nome é obrigatório.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erros[] = 'E-mail inválido.';
if (empty($telefone)) $erros[] = 'Telefone é obrigatório.';
if (empty($local)) $erros[] = 'Local do evento é obrigatório.';
if (empty($data_evento)) $erros[] = 'Data do evento é obrigatória.';
if (empty($qtdpessoas)) $erros[] = 'Informe a quantidade de convidados.';

if (!empty($erros)) {
    echo '<h3>Erro no envio:</h3><ul>';
    foreach ($erros as $erro) {
        echo "<li>$erro</li>";
    }
    echo '</ul><a href="index.php">Voltar</a>';
    exit;
}

try {
    $mail = new PHPMailer(true);

    // Configurações do Gmail
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mayna.thayla@gmail.com'; // seu e-mail Gmail
    $mail->Password   = 'nrqewmmuvivryyqe';        // senha de app
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // De e para
    $mail->setFrom('mayna.thayla@gmail.com', "Formulário Iba's Buffet");
    $mail->addAddress('mayna.thayla@gmail.com', 'Thayla');

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Novo Pedido de Orçamento - Iba\'s Buffet';
    $mail->Body = "
        <h2>Novo orçamento recebido</h2>
        <p><strong>Nome:</strong> $nome</p>
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Telefone:</strong> $telefone</p>
        <p><strong>Tipo de Evento:</strong> $tipo_evento</p>
        <p><strong>Data:</strong> $data_evento</p>
        <p><strong>Local:</strong> $local</p>
        <p><strong>Convidados:</strong> $qtdpessoas</p>
        <p><strong>Mensagem:</strong><br>" . nl2br(htmlspecialchars($mensagem)) . "</p>
    ";

    $mail->send();

    echo "<script>
        alert('Orçamento enviado com sucesso! Verifique seu e-mail.');
        window.location.href = 'index.php';
    </script>";
} catch (Exception $e) {
    echo "❌ Erro ao enviar e-mail: {$mail->ErrorInfo} <br><a href='index.php'>Voltar</a>";
}
