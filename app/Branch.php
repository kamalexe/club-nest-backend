<?php

namespace App;

enum Branch: string
{
    case CSE = 'Computer Science & Engineering';
    case ECE = 'Electronics & Communication Engineering';
    case ME = 'Mechanical Engineering';
    case CE = 'Civil Engineering';
    case EE = 'Electrical Engineering';

    public static function all(): array
    {
        return [
            self::CSE->value,
            self::ECE->value,
            self::ME->value,
            self::CE->value,
            self::EE->value,
        ];
    }
}
