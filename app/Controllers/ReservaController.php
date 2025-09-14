<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\ReservaModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ReservaController extends Controller
{
    /**
     * Exibe a página com o formulário de reserva.
     */
    public function create(): void
    {
        $this->view('reserva/create', [
            'titulo' => 'Faça sua Reserva'
        ]);
    }

    /**
     * Processa o envio do formulário de reserva.
     */
    public function store(): void
    {
        $data = [
            'nome'           => $_POST['nome'] ?? '',
            'telefone'       => $_POST['telefone'] ?? '',
            'email'          => $_POST['email'] ?? '',
            'data_evento'    => $_POST['data_evento'] ?? '',
            'hora_evento'    => $_POST['hora_evento'] ?? '',
            'tipo_evento'    => $_POST['tipo_evento'] ?? '',
            'num_convidados' => $_POST['num_convidados'] ?? 0,
        ];

        if (in_array('', $data)) {
            $_SESSION['error_message'] = 'Todos os campos são obrigatórios.';
            header('Location: /reserva');
            exit;
        }

        $reservaModel = new ReservaModel();
        if ($reservaModel->save($data)) {
            // Se a reserva foi salva, tente enviar o e-mail.
            $this->enviarEmailConfirmacao($data);
            
            $_SESSION['success_message'] = 'Sua solicitação de reserva foi enviada com sucesso! Um e-mail de confirmação foi enviado para você.';
            header('Location: /reserva');
            exit;
        } else {
            $_SESSION['error_message'] = 'Ocorreu um erro ao salvar sua reserva. Tente novamente.';
            header('Location: /reserva');
            exit;
        }
    }

    /**
     * Envia o e-mail de confirmação para o cliente.
     */
    private function enviarEmailConfirmacao(array $data): void
    {
        $mail = new PHPMailer(true);

        try {
            // Configurações do Servidor
            $mail->isSMTP();
            $mail->Host       = $_ENV['MAIL_HOST'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $_ENV['MAIL_USERNAME'];
            $mail->Password   = $_ENV['MAIL_PASSWORD'];
            $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
            $mail->Port       = $_ENV['MAIL_PORT'];
            $mail->CharSet    = 'UTF-8';

            // Remetente e Destinatário
            $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
            $mail->addAddress($data['email'], $data['nome']);

            // Conteúdo do E-mail
            $mail->isHTML(true);
            $mail->Subject = 'Confirmação de Solicitação de Reserva - Iba\'s Buffet';
            
            // Corpo do E-mail em HTML
            $mail->Body = "
                <div style='font-family: Arial, sans-serif; line-height: 1.6;'>
                    <h2 style='color: #8b7100ff;'>Olá, " . htmlspecialchars($data['nome']) . "!</h2>
                    <p>Agradecemos por seu interesse. Recebemos sua solicitação de reserva com os seguintes detalhes:</p>
                    <ul style='list-style-type: none; padding: 0;'>
                        <li><strong>Evento:</strong> " . htmlspecialchars($data['tipo_evento']) . "</li>
                        <li><strong>Data:</strong> " . date('d/m/Y', strtotime($data['data_evento'])) . " às " . htmlspecialchars($data['hora_evento']) . "</li>
                        <li><strong>Nº de Convidados:</strong> " . htmlspecialchars($data['num_convidados']) . "</li>
                    </ul>
                    <p>Nossa equipe entrará em contato em breve para confirmar a disponibilidade e finalizar os detalhes.</p>
                    <p>Atenciosamente,<br><strong>Equipe Iba's Buffet</strong></p>
                </div>
            ";
            
            $mail->send();
        } catch (Exception $e) {
            // Se o e-mail falhar, não quebramos a aplicação.
            // A reserva já foi salva. Podemos registrar o erro para análise posterior.
            error_log("Erro no envio do e-mail: {$mail->ErrorInfo}");
        }
    }
}