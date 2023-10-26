<?php


function saludo()
{
    return "Hola soy helper";
}

function suma($a, $b)
{
    return $a + $b;
}

function separar($ced)
{
    $cedula = str_split($ced);
    return $cedula;
}

function validadorCedula($cedula)
{
    //primero validar si es  mayor a 10 numeros
    if (strlen($cedula) != 10) {
        return "no valida";
    }
    //segundo paso dividir en un array la cedula
    $digitos = str_split($cedula);
    $multiplicar = 1;
    $suma = 0;
    $resta = 0;

    for ($i = 0; $i < count($digitos) - 1; $i++) {
        if ($i % 2 == 0) {
            $multiplicar = $digitos[$i] * 2;
            if ($multiplicar > 9) {
                $multiplicar = $multiplicar - 9;
            } else
                $suma += $multiplicar;
        } else {
            $suma += $digitos[$i];
        }
    }

    $decima = (floor($suma / 10) + 1) * 10;

    if (($decima - $suma) == count($digitos)) {
        $decima = $suma;
    }

    $resta = $decima - $suma;

    if ($resta == $digitos[9]) {
        return "valida";
    } else {
        return "no valida";
    }
}
