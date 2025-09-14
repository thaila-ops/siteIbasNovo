<?php

declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../vendor/autoload.php';

// Carrega as variáveis de ambiente
try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
} catch (\Dotenv\Exception\InvalidPathException $e) {
    die("Erro: O arquivo .env não foi encontrado.");
}

// Tratamento de Exceções Global
set_exception_handler(function ($exception) {
    http_response_code(500);
    // Futuramente, teremos uma view de erro bonita aqui.
    echo "<h1>Ops! Algo deu errado.</h1>";
    echo "<p>" . $exception->getMessage() . "</p>";
});

// Carrega o arquivo de rotas
require_once __DIR__ . '/../routes/web.php';