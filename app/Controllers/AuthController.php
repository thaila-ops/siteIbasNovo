<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\UsuarioModel;

class AuthController extends Controller
{
    /**
     * Exibe a página com o formulário de login.
     */
    public function showLogin(): void
    {
        $this->view('auth/login', [
            'titulo' => 'Login'
        ]);
    }

    /**
     * Processa a tentativa de login do usuário.
     */
    public function login(): void
{
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;

    if (!$email || !$senha) {
        $this->redirectWithError('/login', 'Por favor, preencha todos os campos.');
        return;
    }

    $userModel = new \App\Models\UsuarioModel();
    $user = $userModel->findByEmail($email);

    if ($user && password_verify($senha, $user['senha'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nome'];
        $_SESSION['user_role'] = $user['role'];

        header('Location: /dashboard');
        exit;
    }

    $this->redirectWithError('/login', 'E-mail ou senha inválidos.');
}
    /**
     * Faz o logout do usuário, destruindo a sessão.
     */
    public function logout(): void
    {
        session_destroy();
        header('Location: /login');
        exit;
    }

    /**
     * Método auxiliar para redirecionar com uma mensagem de erro na sessão.
     */
    private function redirectWithError(string $url, string $message): void
    {
        $_SESSION['error_message'] = $message;
        header("Location: $url");
        exit;
    }
}