<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function formulario(): string
    {
        /* falta pasar los valores */
        return view('welcome_message');
    }
}
