<?php

namespace App\Controllers;

class Prueba extends BaseController
{
    public function Formulario()
    {
        return view('layouts/header').view('vistasPrueba/Formulario').view('layouts/footer');
    }

    public function envioDatosPrueba(): string
    {
        $fecha = $_GET['fecha'];
        $nombre = $_GET['nombre'];
        $cedula = $_GET['cedula'];

        $bisiesto = bisiesto($fecha);
        $data = [
            "resp" => $bisiesto,
            "nombre" => $nombre,
            "cedula" => $cedula,
        ];

        return view('layouts/header').view('vistasPrueba/Resultado', $data).view('layouts/footer');
    }
}
