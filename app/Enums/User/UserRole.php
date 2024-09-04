<?php

namespace App\Enums\User;

enum UserRole: int{

    case CUSTOMER = 0;
    case VENDOR = 1;

    case ADMIN = 2;

    case SUPERVISOR = 3;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
