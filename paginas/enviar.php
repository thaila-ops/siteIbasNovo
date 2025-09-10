<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

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
    $tipo_evento = mysqli_real_escape_string($conn, $_POST['tipo_evento'] ?? '');
    $data_evento = mysqli_real_escape_string($conn, $_POST['date'] ?? '');
    $hora_evento = mysqli_real_escape_string($conn, $_POST['hora'] ?? '');
    
    // Extrair número de convidados
    $num_convidados = 0;
    if (preg_match('/(\d+)/', $qtdpessoas, $matches)) {
        $num_convidados = (int)$matches[1];
    }
    
    // Preparar e executar a query SQL - CORRIGIDA para a tabela reserva
    $sql = "INSERT INTO reserva (nome, telefone, email, data_evento, hora_evento, tipo_evento, num_convidados) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    // Verificar se a preparação foi bem sucedida
    if ($stmt === false) {
        die('Erro na preparação da query: ' . $conn->error);
    }
    
    // Bind parameters - CORRIGIDO para 7 parâmetros
    $stmt->bind_param("ssssssi", $nome, $telefone, $email, $data_evento, $hora_evento, $tipo_evento, $num_convidados);
    
    if ($stmt->execute()) {
        // Enviar email de confirmação
        $mail = new PHPMailer(true);
        
        try {
            // Configurações do servidor - AJUSTE ESTAS CONFIGURAÇÕES
            $mail->isSMTP();
            $mail->Host       = 'smtp.seu-servidor.com'; // Seu servidor SMTP
            $mail->SMTPAuth   = true;
            $mail->Username   = 'mayna.thayla@gmail.com'; // Seu email
            $mail->Password   = 'sua-senha'; // Sua senha
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // ou ENCRYPTION_STARTTLS
            $mail->Port       = 465; // ou 587 para TLS
            
            // Remetente
            $mail->setFrom('mayna.thayla@gmail.com', 'Ibas Buffet');
            
            // Destinatário
            $mail->addAddress($email, $nome);
            
            // Conteúdo do email
            $mail->isHTML(true);
            $mail->Subject = 'Confirmação de Reserva - Ibas Buffet';
            
            $mail->Body = "
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                    .header { background-color: #3a1c71; color: white; padding: 20px; text-align: center; }
                    .content { padding: 20px; }
                    .details { background-color: #f9f9f9; padding: 15px; border-radius: 5px; margin: 15px 0; }
                    .footer { background-color: #f1f1f1; padding: 15px; text-align: center; font-size: 14px; }
                </style>
            </head>
            <body>
                <div class='header'>
                    <h1>Iba's Buffet</h1>
                    <p>Recebemos sua solicitação de reserva!</p>
                </div>
                <div class='content'>
                    <p>Olá <strong>$nome</strong>,</p>
                    <p>Agradecemos pelo seu interesse em nossos serviços. Sua solicitação de reserva foi recebida com sucesso.</p>
                    
                    <div class='details'>
                        <h3>Detalhes da Reserva:</h3>
                        <p><strong>Evento:</strong> $tipo_evento</p>
                        <p><strong>Data:</strong> " . date('d/m/Y', strtotime($data_evento)) . "</p>
                        <p><strong>Hora:</strong> $hora_evento</p>
                        <p><strong>Número de convidados:</strong> $qtdpessoas</p>
                        <p><strong>Telefone:</strong> $telefone</p>
                    </div>
                    
                    <p>Nossa equipe entrará em contato em até 24 horas para confirmar os detalhes e discutir as opções disponíveis.</p>
                    
                    <p>Atenciosamente,<br>Equipe Iba's Buffet</p>
                </div>
                <div class='footer'>
                    <p>Este é um email automático, por favor não responda.</p>
                    <p>Iba's Buffet - Rua Santa Cruz, 508 – Jd Florida, Campo Mourão – PR</p>
                </div>
            </body>
            </html>
            ";
            
            $mail->AltBody = "Iba's Buffet\n\nOlá $nome,\n\nAgradecemos pelo seu interesse em nossos serviços. Sua solicitação de reserva foi recebida com sucesso.\n\nDetalhes da Reserva:\nEvento: $tipo_evento\nData: " . date('d/m/Y', strtotime($data_evento)) . "\nHora: $hora_evento\nNúmero de convidados: $qtdpessoas\nTelefone: $telefone\n\nNossa equipe entrará em contato em até 24 horas para confirmar os detalhes e discutir as opções disponíveis.\n\nAtenciosamente,\nEquipe Iba's Buffet";
            
            $mail->send();
            
            // Sucesso - redirecionar com mensagem de sucesso
            header('Location: contato.php?status=success');
            exit();
        } catch (Exception $e) {
            // Se houver erro no envio do email, ainda assim redirecionamos, mas podemos logar o erro
            error_log("Erro ao enviar email: " . $mail->ErrorInfo);
            header('Location: contato.php?status=success_no_email');
            exit();
        }
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