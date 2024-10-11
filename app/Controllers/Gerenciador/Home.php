<?php

namespace App\Controllers\Gerenciador;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        // Verifica se está logado
        $data['session'] = \Config\Services::session();

        // Se não manda para página de login
        if (!$data['session']->get('user')) {
            return redirect()->to(base_url('gerenciador/login'));
        }

        return view('gerenciador/dashboard/home');
    }
}
