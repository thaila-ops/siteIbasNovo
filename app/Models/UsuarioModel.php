<?php

namespace App\Models;

use Config\Database;
use PDO;

class UsuarioModel
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    /**
     * Encontra um usuário pelo seu endereço de e-mail.
     * Retorna os dados do usuário se encontrado, ou null se não.
     */
    public function findByEmail(string $email): ?array
    {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user ?: null;
    }
}