<?php

namespace App\Controllers\Main;

use App\Controllers\BaseController;
use App\Models\ProductModel;
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

    public function produtos()
    {

        // get products
        $product_model = new ProductModel();
        $products = $product_model->where('availability', true)->findAll();

        $data = [
            'products' => $products
        ];

        return view('main/produtos', $data);
    }
}
