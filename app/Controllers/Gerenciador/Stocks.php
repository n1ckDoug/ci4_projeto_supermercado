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
            'title' => 'Estoques',
            'page' => 'Estoques',
            'products' => $products
         ];

         return view('gerenciador/dashboard/stocks/index', $data);
    }

    public function add($enc_id)
    {
        $id = Decrypt($enc_id);
        if(empty($id)){
            return redirect()->to('gerenciador/estoques');
        }

        // load product
        $product_model = new ProductModel();
        $product = $product_model->where('id', $id)->first();

        $data = [
            'title' => 'Estoque',
            'page' => 'Adicionar estoque',
            'product' => $product
        ];

        return view('gerenciador/dashboard/stocks/add_frn', $data);
    }

    public function add_submit()
    {
        echo 'add_submit';
    }
}
