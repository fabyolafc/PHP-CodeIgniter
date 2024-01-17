<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function login()
    {
        //Inicializa a sessão.
        $session = session();
        //Faz o login.
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        //Verifica os dados.
        if($email == 'fabyola@gmail.com' && $senha == '1234'){
            //Grava os dados do usuário na sessão.
            $dadosSession = [
                'email' => 'fabyola@gmail.com',
                'nome' => 'Fabyola'
            ];
            $session->set($dadosSession);

            //Redireciona para a área restrita.
            return redirect()->to(base_url('restrita'));
        } else {
            //Redireciona para a tela inicial de login informando qual foi o erro ocorrido.
            $session->setFlashdata('msgErro', 'Usuário ou senha inválidos.');
            return redirect()->to(base_url('/'));
        }
    }

    public function logout()
    {
        //Faz o logout.
        $session = session();
        $session->remove(['email', 'nome']);

        //Após o logout, deve redirecionar para a tela inicial de login.
        return redirect()->to(base_url('/'));
    }
}