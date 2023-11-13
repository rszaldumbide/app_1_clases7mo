<?php

function bisiesto($fecha)
{
    $fechaSeparada = explode("-", $fecha);
    $año = $fechaSeparada[0] * 1;

    $resp = "";

    if (($año % 4 == 0 && $año % 100 == 0) || $año % 400 == 0) {
        $resp = "año bisiesto";
    } else {
        $resp = "año no bisiesto";
    }

    return $resp;
}
