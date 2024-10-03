<?php

namespace App\Routes;

use Config\Services;

$routes = Services::routes();

$routes->get('/gerenciador', 'gerenciador\Home::index');