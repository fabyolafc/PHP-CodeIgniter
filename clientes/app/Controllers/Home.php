<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        // Criar o model
        $clienteModel = new \App\Models\ClienteModel();

        //$clientes = $clienteModel->findAll();

        $clientes = $clienteModel->getClientes();

        $dadosView = [
            'clientes' => $clientes
        ];

        return view('index', $dadosView);
    }

    public function inserir () {
        $nome = $this->request->getPost('nome');
        $sobrenome = $this->request->getPost('sobrenome');
        $idade = $this->request->getPost('idade');

        $dados = [
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'idade' => $idade
        ];

        //$clienteModel = new \App\Models\ClienteModel();
        $clienteModel = model('ClienteModel');

        $clienteModel->insert ($dados);

        return redirect()->to(base_url ('/'));

    }

    public function excluir () {

        $id = $this->request->getPost('id');

        $clienteModel = model ('ClienteModel');

        $clienteModel->delete($id);

        return redirect()->to(base_url ('/'));

    }

    public function editar ($id) {

        $clienteModel = model ('ClienteModel');

        $cliente = $clienteModel->find($id);


        if ($cliente == null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            
            $dados = [
                'cliente' => $cliente
            ];
            
            /*$clienteModel->update($id, $dados);*/
           
            return view ('editarUsuario', $dados);

        }
    }

    public function alterar ($id) {
        $nome = $this->request->getPost('nome');
        $sobrenome = $this->request->getPost('sobrenome');
        $idade = $this->request->getPost('idade');

        $dados = [
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'idade' => $idade
        ];

        //$clienteModel = new \App\Models\ClienteModel();
        $clienteModel = model('ClienteModel');

        $clienteModel->update($id, $dados);

        return redirect()->to(base_url ('/'));

    }
    
}
