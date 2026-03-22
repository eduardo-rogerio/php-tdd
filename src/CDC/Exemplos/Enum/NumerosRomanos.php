<?php

namespace CDC\Exemplos\Enum;

enum NumerosRomanos: string {
    case I = "I";
    case V = "V";
    case X = "X";
    case L = "L";
    case C = "C";
    case D = "D";
    case M = "M";

    public function getNumeroDecimal(): int
    {
        return match ($this) {
            self::I => 1,
            self::V => 5,
            self::X => 10,
            self::L => 50,
            self::C => 100,
            self::D => 500,
            self::M => 1000,
        };
    }
}
