<?php

namespace App\Enums\Order;

enum OrderType: int{

    case MEAL = 0;
    case PACKAGE = 1;


    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
