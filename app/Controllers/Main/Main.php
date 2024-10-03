<?php

namespace App\Controllers\Main;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        return view('main/home');
    }

    public function sobre()
    {
        return view('main/sobre');
    }

    public function contato()
    {
        return view('main/contato');
    }
}
