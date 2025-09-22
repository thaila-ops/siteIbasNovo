<?php

namespace App\Controllers;

use App\Core\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Este é o nosso "segurança". Se não houver usuário logado, expulsa para a página de login.
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
    }

    public function index(): void
    {
        // Importa o ReservaModel para poder usá-lo
        $reservaModel = new \App\Models\ReservaModel();

        // Usa o novo método findAll() para buscar as reservas
        $reservas = $reservaModel->findAll();

        // Envia os dados das reservas para a view
        $this->view('dashboard', [
            'titulo' => 'Painel de Controle',
            'reservas' => $reservas // Passando a lista de reservas para a view
        ]);
    }

    /**
     * Processa a exclusão de uma reserva.
     */
    public function deleteReserva(): void
    {
        // Garante que apenas usuários logados possam excluir
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $id = $_POST['id'] ?? null;

        if ($id) {
            $reservaModel = new \App\Models\ReservaModel();
            $reservaModel->deleteById((int)$id);
        }

        // Redireciona de volta para o dashboard após a exclusão
        header('Location: /dashboard');
        exit;
    }

    /**
     * Processa a atualização do status de uma reserva.
     */
    public function updateReservaStatus(): void
    {
        $id = $_POST['id'] ?? null;
        $status = $_POST['status'] ?? null;

        // Validação simples
        if ($id && $status) {
            $reservaModel = new \App\Models\ReservaModel();
            $reservaModel->updateStatus((int)$id, $status);
            
            // Opcional: Adicionar mensagem de sucesso para o usuário
            $_SESSION['success_message'] = 'Status da reserva atualizado com sucesso!';
        } else {
            // Opcional: Adicionar mensagem de erro
            $_SESSION['error_message'] = 'Erro ao atualizar o status.';
        }

        header('Location: /dashboard');
        exit;
    }
}