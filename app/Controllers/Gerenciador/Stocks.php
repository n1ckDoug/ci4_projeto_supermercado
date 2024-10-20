<?php

namespace App\Controllers\Gerenciador;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class Stocks extends BaseController
{
    public function index()
    {
         // Verifica se está logado
         $data['session'] = \Config\Services::session();

         // Se não manda para página de login
         if (!$data['session']->get('user')) {
             return redirect()->to(base_url('gerenciador/login'));
         }

         // load all products
         $product_model = new ProductModel();
         $products = $product_model->findAll();

         $data = [
            'title' => 'Stocks',
            'page' => 'Stocks',
            'products' => $products
         ];

         return view('gerenciador/dashboard/stocks/index', $data);
    }
}
