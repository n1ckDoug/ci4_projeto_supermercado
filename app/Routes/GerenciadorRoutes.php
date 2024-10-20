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
$routes->get('/gerenciador/produtos/editar_produto/(:alphanum)', 'gerenciador\Products::edit_product/$1');
$routes->post('/gerenciador/produtos/edit_submit', 'gerenciador\Products::edit_submit');
$routes->get('/gerenciador/produtos/delete/(:alphanum)', 'gerenciador\Products::delete/$1');
$routes->get('/gerenciador/produtos/delete_confirm/(:alphanum)', 'gerenciador\Products::delete_confirm/$1');

// Stock
$routes->get('/gerenciador/stocks', 'gerenciador\Stocks::index');
$routes->get('/gerenciador/stocks/produto/(:alphanum)', 'gerenciador\Stocks::stock/$1');