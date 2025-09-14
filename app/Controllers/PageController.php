<?php

namespace App\Controllers;

use App\Core\Controller;

class PageController extends Controller
{
    /**
     * Exibe a página do Menu de Natal.
     */
    public function menuNatal(): void
    {
        $this->view('pages/menu-natal', [
            'titulo' => 'Menu de Natal'
        ]);
    }

    /**
     * Exibe a página do Catálogo.
     * (Já vamos deixar preparada para o próximo passo)
     */
    public function catalogo(): void
    {
        $this->view('pages/catalogo', [
            'titulo' => 'Catálogo'
        ]);
    }
}