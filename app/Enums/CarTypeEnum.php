<?php

namespace App\Enums;

enum CarTypeEnum: string
{
    case NEW = 'new';
    case USED = 'used';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}




