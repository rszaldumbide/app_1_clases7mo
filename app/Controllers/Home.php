<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('bienvenida');
    }

    public function saludo(): string
    {
        return view('bienvenida');
    }

    public function form(): void
    {
        $nombre = $this->request->getGet('nombre');
        $apellido = $this->request->getGet('apellido');
        $clave = $this->request->getGet('clave');
        $cedula = $this->request->getGet('cedula');

        $c = validadorCedula($cedula);
        $m = ["nombre" => $nombre, "apellido" => $apellido, "clave" => $clave, "cedula" => $cedula, "caracteres" => $c, "saludo" => saludo()];

        echo view('form', $m);
    }
}
