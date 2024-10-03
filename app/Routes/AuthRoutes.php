<?php

namespace App\Routes;

use Config\Services;

$routes = Services::routes();

$routes->get('/gerenciador/login', 'gerenciador\Auth::index');