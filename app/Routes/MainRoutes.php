<?php

namespace App\Routes;

use Config\Services;

$routes = Services::routes();

$routes->get('/', 'main\Main::index');