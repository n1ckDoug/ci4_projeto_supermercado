<?php

namespace App\Controllers\Gerenciador;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        return view('gerenciador/index');
    }
}
