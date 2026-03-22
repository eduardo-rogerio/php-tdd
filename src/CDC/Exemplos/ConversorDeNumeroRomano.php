<?php

namespace CDC\Exemplos;

use CDC\Exemplos\Enum\NumerosRomanos;

class ConversorDeNumeroRomano {

    public function converte(string $numeroRomano): int
    {
        $acumulador = 0;
        $lenght = strlen($numeroRomano);
        for($i = 0; $i < $lenght; $i++){
            $numCorrente = NumerosRomanos::from($numeroRomano[$i]);
            $acumulador += $numCorrente->getNumeroDecimal();
        }

        return $acumulador;
    }

}