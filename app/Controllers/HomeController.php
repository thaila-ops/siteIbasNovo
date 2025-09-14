<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    /**
     * Carrega a página inicial do site.
     */
    public function index(): void
    {
        $this->view('home', [
            'titulo' => 'Página Inicial'
        ]);
    }
}