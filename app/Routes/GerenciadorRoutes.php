<?php

namespace App\Routes;

use Config\Services;

$routes = Services::routes();

// Home
$routes->get('/gerenciador', 'gerenciador\Home::index');

// Products
$routes->get('/gerenciador/produtos', 'gerenciador\Products::index');
$routes->get('/gerenciador/produtos/novo', 'gerenciador\Products::new_product');
$routes->post('/gerenciador/produtos/new_submit', 'gerenciador\Products::new_submit');