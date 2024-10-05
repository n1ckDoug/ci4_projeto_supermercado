<?php

namespace App\Controllers\Gerenciador;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login_frm');
    }
}
