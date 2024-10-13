<?php

namespace App\Controllers\Gerenciador;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class Products extends BaseController
{
    public function index()
    {
        // get products
        $product_model = new ProductModel();
        $products = $product_model->findAll();

        $data = [
            'title' => 'Produtos',
            'page' => 'Produtos',
            'products' => $products
        ];

        return view('gerenciador/dashboard/products/index', $data);
    }

    public function new_product()
    {
        // get distinc categories
        $product_model = new ProductModel();
        $categories = $product_model->select('category')->distinct()->findAll();

        $data = [
            'title' => 'Produtos',
            'page' => 'Novo produto',

            //form validation
            'validation_errors' => session()->getFlashdata('validation_errors'),

            // get distinc categories
            'categories' => $categories

        ];

        return view('gerenciador/dashboard/products/new_product_frm', $data);
    }

    public function new_submit()
    {
        // form validation
        $validation = $this->validate([
            // product image
            'file_image' => [
                'label' => 'imagem do produto',
                'rules' => [
                    'uploaded[file_image]',
                    'mime_in[file_image,image/png]',
                    'max_size[file_image,200]'
                ],
                'errors' => [
                    'uploaded' => 'O campo {field} é obrigatório',
                    'mime_in' => 'O campo {field} deve ser uma imagem PNG',
                    'max_size' => 'O campo {field} deve ter no máximo 200KB'
                ]
            ],

            // input fields
            'text_name' => [
                'label' => 'nome do produto',
                'rules' => 'required|min_length[3]|max_length[100]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório',
                    'min_length' => 'O campo {field} deve ter no mínimo 3 caracteres',
                    'max_length' => 'O campo {field} deve ter no máximo 100 caracteres'
                ]
            ],
            'text_description' => [
                'label' => 'descrição do produto',
                'rules' => 'required|min_length[3]|max_length[200]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório',
                    'min_length' => 'O campo {field} deve ter no mínimo 3 caracteres',
                    'max_length' => 'O campo {field} deve ter no máximo 200 caracteres'
                ]
            ],
            'text_category' => [
                'label' => 'categoria do produto',
                'rules' => 'required|min_length[3]|max_length[50]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório',
                    'min_length' => 'O campo {field} deve ter no mínimo 3 caracteres',
                    'max_length' => 'O campo {field} deve ter no máximo 50 caracteres'
                ]
            ],
            'text_price' => [
                'label' => 'preço do produto',
                'rules' => 'required|regex_match[/^\d+\,\d{2}$/]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório',
                    'regex_match' => 'O campo {field} deve ser um número com o formato x,xx',
                ]
            ],
            'text_promotion' => [
                'label' => 'promoção do produto',
                'rules' => 'required|greater_than[-1]|less_than[100]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório',
                    'greater_than' => 'O campo {field} deve ser um número maior que {param}',
                    'less_than' => 'O campo {field} deve ser um número menor que {param}',
                ]
            ],
            'text_initial_stock' => [
                'label' => 'estoque inicial do produto',
                'rules' => 'required|greater_than[99]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório',
                    'greater_than' => 'O campo {field} deve ser um número maior que {param}',
                ]
            ],
            'text_stock_minimum_limit' => [
                'label' => 'limite mínimo de estoque do produto',
                'rules' => 'required|greater_than[99]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório',
                    'greater_than' => 'O campo {field} deve ser um número maior que {param}',
                ]
            ]
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        // check if product already exists
        $product_model = new ProductModel();
        $product = $product_model->where('name', $this->request->getPost('text_name'))->first();
        if ($product) {
            return redirect()->back()->withInput()->with('validation_errors', ['text_name' => 'Já existe outro produto com o mesmo nome.']);
        }

        // upload image
        $file_image = $this->request->getFile('file_image');
        $novoNome = $file_image->getRandomName();

        $file_image->move(ROOTPATH . 'public/assets/gerenciador/images/products', $novoNome, true);

        // prepare data for insert
        $data = [
            'name' => $this->request->getPost('text_name'),
            'description' => $this->request->getPost('text_description'),
            'category' => $this->request->getPost('text_category'),
            'price' => $this->request->getPost('text_price'),
            'promotion' => $this->request->getPost('text_promotion'),
            'stock' => $this->request->getPost('text_initial_stock'),
            'stock_min_limit' => $this->request->getPost('text_stock_minimum_limit'),
            'image' => $novoNome,
        ];

        // insert data
        $product_model->insert($data);

        // redirect
        return redirect()->to('gerenciador/produtos');
    }
}
