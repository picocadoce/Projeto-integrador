<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    protected $class = ['before' => ['auth']];
    private $usuarioModel;
    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }
    public function index(): string
    {
        return view('usuarios', [
            #'usuarios' => $this->usuarioModel->findAll(),
            'usuarios' => $this->usuarioModel->paginate(10),
            'pager' => $this->usuarioModel->pager
        ]);
    }
    public function deletar($id)
    {
        if ($this->usuarioModel->delete($id)) {
            echo view('msgUsuarios', [
                'message' => 'Usuário Excluído com Sucesso'
            ]);
        } else {
            echo view('msgUsuarios', [
                'message' => 'Falha ao excluir usuário'
            ]);
        }
    }
    public function novo()
    {
        return view("formUsuario");
    }

    public function gravar()
    {
        $dadosForm = $this->request->getPost();


        if (!empty($dadosForm['senha'])) {
            $dadosForm['senha'] = md5($dadosForm['senha']);
        }

        if (empty($dadosForm['hab'])) {
            $dadosForm['hab'] = 0;
        }

        if ($this->usuarioModel->save($dadosForm)) {
            return view('msgUsuarios', [
                'message' => 'Usuário Salvo com Sucesso!'
            ]);
        } else {
            return view('msgUsuarios', [
                'message' => 'Falha ao Salvar Registro!'
            ]);
        }
    }

    public function editar($id)
    {
        return view('formUsuario', [
            'usuarios' => $this->usuarioModel->find($id)
        ]);
    }
}
