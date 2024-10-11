<?php

namespace App\Controllers\Gerenciador;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            // validation errors 
            'validation_errors' => session()->getFlashdata('validation_errors'),

            // login error
            'login_error' => session()->getFlashdata('login_error'),
        ];

        return view('auth/login_frm', $data);
    }

    public function login_submit()
    {
        // form validation
        $validation = $this->validate([
            'text_email' => [
                'label' => 'Email',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.'
                ]
            ],
            'text_password' => [
                'label' => 'Senha',
                'rules' => 'required',
                'errors' => [
                    'required' => 'O campo {field} é obrigatório.'
                ]
            ]
        ]);

        //verifica se validação está correta
        if (!$validation) {
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        // check login
        $email = $this->request->getPost('text_email');
        $senha = $this->request->getPost('text_password');

        $user_model = new UserModel();
        $user = $user_model->check_for_login($email, $senha);

        if (!$user) {
            return redirect()->back()->withInput()->with('login_error', 'Email ou senha inválidos.');
        }

        $user_data = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'roles' => $user->roles,
        ];

        session()->set('user', $user_data);
        return redirect()->to('gerenciador');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('gerenciador/login');
    }
}
