<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Controlador base da aplicação.
 * Todos os outros controladores herdam dele.
 */
class AppController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();

        // Componente para mensagens de feedback (sucesso/erro)
        $this->loadComponent('Flash');

        // (Opcional) Proteção de formulários
        // $this->loadComponent('FormProtection');
    }
}
