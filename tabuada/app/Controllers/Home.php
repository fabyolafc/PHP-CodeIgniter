<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function numero() {
        return view ('numero');
    }
    public function tabuada() {
        $numero = $this->request->getPost('numero');
        for ($i=1; $i<=10; $i++) {
            echo nl2br(" $i x $numero = " . $i*$numero . "\n");
        }
    }
}
