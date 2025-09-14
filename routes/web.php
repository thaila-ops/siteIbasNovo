<?php

use App\Core\Router;
use App\Controllers\AuthController;
use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\ReservaController;
use App\Controllers\PageController;

$router = new Router();

// Rotas públicas
$router->get('/', [HomeController::class, 'index']);
$router->get('/login', [AuthController::class, 'showLogin']);
$router->post('/login', [AuthController::class, 'login']);
$router->get('/reserva', [ReservaController::class, 'create']);
$router->post('/reserva', [ReservaController::class, 'store']);
$router->get('/menu-natal', [PageController::class, 'menuNatal']);
$router->get('/catalogo', [PageController::class, 'catalogo']); // <-- ADICIONE ESTA LINHA

// Rotas protegidas
$router->get('/dashboard', [DashboardController::class, 'index']);
$router->get('/logout', [AuthController::class, 'logout']);
$router->post('/reserva/delete', [DashboardController::class, 'deleteReserva']);

$router->dispatch();