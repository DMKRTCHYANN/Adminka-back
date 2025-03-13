<?php

namespace App\Enums;

enum CarStatusEnum: string
{
    case AVAILABLE = 'available';
    case SOLD = 'sold';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
