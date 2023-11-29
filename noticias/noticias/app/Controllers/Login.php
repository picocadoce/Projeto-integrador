<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    protected $class = ['before' => ['auth']];
    public function index(): string
    {
        return view('login');
    }

    public function processar()
    {
        $validado = $this->validate(
            [
                'email' => 'required|valid_email',
                'senha' => 'required',
            ],
            [
                'email' => [
                    'required' => 'O e-mail é obrigatório',
                    'valid_email' => 'O e-mail deve ser válido'
                ],
                'senha' => [
                    'required' => 'A senha é obrigatória',
                ]
            ],
        );

        if (!$validado) {
            return redirect()->route('login')->with('erros', $this->validator->getErrors());
        }

        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->obterPorEmail($email);

        if (!$usuario) {
            return redirect()->route('login')->with('error', 'Usuário Inválido');
        } else {
            if ($usuario['SENHA'] === md5($senha) && $usuario['HAB'] === '1') {

                session()->set('logado', true);

                return redirect()->route('noticias');
            }
        }

        return redirect()->route('login')->with('error', 'Credenciais inválidas');
    }

    public function sair()
    {
        session()->remove('logado');
        return redirect()->route('login');
    }
}
