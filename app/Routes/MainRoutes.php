<?php

namespace App\Routes;

use Config\Services;

$routes = Services::routes();

$routes->get('/', 'main\Main::index');
$routes->get('/sobre', 'main\Main::sobre');
$routes->get('/contato', 'main\Main::contato');
$routes->get('/produtos', 'main\Main::produtos');