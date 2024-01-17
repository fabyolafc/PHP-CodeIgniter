<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //Caso já esteja logado, redirecionar para a área restrita.
        $session = session();

        //Se houver alguma mensagem de erro, ela deve ser passada para a view.
        $msgErro = $session->getFlashdata('msgErro');

        $email = $session->get('email');

        //Se existir um email, há um usuário logado.
        if($email != null){
            //Redireciona para a área restrita.
            return redirect()->to(base_url('restrita'));
        }

        //Dados a serem enviados para a view.
        $dadosView = [
            'msgErro' => $msgErro
        ];

        //Página de login.
        return view('formulario_login', $dadosView);
    }

    public function restrita()
    {
        //Inicializa uma sessão.
        $session = session();

        //Só posso acessar se já estiver logado.
        $email = $session->get('email');

        //Se não estiver logado.
        //Deve também exibir uma mensagem informando que não está logado.
        if($email == null){
            $session->setFLashData('msgErro', 'Faça o login antes de acessar a área restrita.');
            return redirect()->to(base_url('/'));
        }

        //Área restrita.
        return view('restrict');
    }
}