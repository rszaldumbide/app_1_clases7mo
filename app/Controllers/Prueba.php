<?php

namespace App\Controllers;

class Prueba extends BaseController
{
    public function Formulario()
    {
        // Cargar la vista del navbar
        $navbarView = view('layouts/navbar');

        // Pasar la vista del navbar como un atributo a la vista principal
        $data['Navbar'] = $navbarView;

        return view('layouts/header') . view('vistasPrueba/Formulario', $data) . view('layouts/footer');
    }

    public function envioDatosPrueba(): string
    {
        // Cargar la vista del navbar
        $navbarView = view('layouts/navbar');

        $fecha = $_GET['fecha'];
        $nombre = $_GET['nombre'];
        $cedula = $_GET['cedula'];

        $bisiesto = bisiesto($fecha);
        $data = [
            "resp" => $bisiesto,
            "nombre" => $nombre,
            "cedula" => $cedula,
            "fecha" => $fecha,
            "Navbar" => $navbarView,
        ];

        return view('layouts/header') . view('vistasPrueba/Resultado', $data) . view('layouts/footer');
    }
}
