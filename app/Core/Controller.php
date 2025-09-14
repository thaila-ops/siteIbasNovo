<?php

namespace App\Core;

use Config\Database;
use PDO;

abstract class Controller
{
    private ?PDO $db = null;

    // Método para facilitar a obtenção da conexão com o banco de dados
    protected function getDbConnection(): PDO
    {
        if ($this->db === null) {
            $this->db = Database::getConnection();
        }
        return $this->db;
    }

    // Método para carregar uma View e passar dados para ela
    protected function view(string $viewName, array $data = []): void
    {
        // Transforma as chaves do array em variáveis (ex: $data['titulo'] vira $titulo)
        extract($data);

        require __DIR__ . "/../Views/{$viewName}.php";
    }
}