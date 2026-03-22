<?php

namespace CDC\Exemplos;

use CDC\Exemplos\Enum\NumerosRomanos;

class ConversorDeNumeroRomano {

    public function converte(string $numeroRomano): int
    {
        $acumulador = 0;
        $ultimoVizinhoDaDireita = 0;
        $lenght = strlen($numeroRomano);
        for($i = $lenght - 1; $i >= 0; $i--) {
            $numCorrente = NumerosRomanos::from($numeroRomano[$i])->getNumeroDecimal();
            $multiplicador = 1;

            if ($numCorrente < $ultimoVizinhoDaDireita) {
                $multiplicador = -1;
            }

            $acumulador += ($numCorrente * $multiplicador);
            $ultimoVizinhoDaDireita = $numCorrente;
        }

        return $acumulador;
    }

}