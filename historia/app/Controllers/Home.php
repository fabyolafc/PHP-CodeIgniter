<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function principal()
    {
        return view ('principal');
    }

    public function pagina1()
    {
        return view ('pagina1');
    }

    public function pagina2()
    {
        //Os dadods deveriam ser retornados por métodos de algum model, mas vamos simular alguns aqui.

        $history = [
            ['nome' => 'Natal Sangrento', 'genero' => ' Terror'],
            ['nome' => 'Acertos Inacabados', 'genero' => 'Policial'],
            ['nome' => 'Parto Inesperado', 'genero' => 'Drama'],
            ['nome' => 'Criminal', 'genero' => 'Crime']
        ];

        $usuario = 'Faby';

        $dadosView = [
            'history' => $history,
            'usuario' => $usuario
        ];

        return view ('pagina2', $dadosView);
    }

    //Recebe dados do formulários de História da página principal
    public function insereHistoria() {
        $nome = $this->request->getPost('nome');
        $genero = $this->request->getPost('genero');
        echo "A historia $nome tem o genero $genero.";
    }

}