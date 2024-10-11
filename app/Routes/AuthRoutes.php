<?php

namespace App\Routes;

use Config\Services;

$routes = Services::routes();

$routes->get('/gerenciador/login', 'gerenciador\Auth::index');
$routes->post('/gerenciador/login_submit', 'gerenciador\Auth::login_submit');
$routes->get('/gerenciador/logout', 'gerenciador\Auth::logout');