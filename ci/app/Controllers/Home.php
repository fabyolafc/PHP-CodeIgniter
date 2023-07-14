<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo "Método index do controlador Home";
    }

    public function pagina1 () {
        echo "Método pagina1 do controlador Home";
    }
    public function pagina2 () {
        echo "Método pagina2 do controlador Home";
    }
}
