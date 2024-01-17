<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //Fazer processo de enviar email
        $email = \Config\Services::email();

        $email->setFrom('fabyolacampos00@gmail.com', 'Fabyola Campos');
        $email->setTo('fabyolacampos20@gmail.com');
        $email->setCC('fsc9@aluno.ifnmg.edu.br');
        $email->setBCC('fabyolacampos00@gmail.com');

        $email->setSubject('Teste de envio de email');

        $dadosView = [
            'destinatario' => 'Miguel Dias',
            'remetente' => 'Fabyola Campos'
        ];

        $message = view ('EmailView', $dadosView);

        $email->setMessage($message);

        $email->send();

        return $email->printDebugger();
    }
}
