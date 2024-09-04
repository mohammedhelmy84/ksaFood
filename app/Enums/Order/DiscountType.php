<?php

namespace App\Enums\Order;

enum DiscountType: int{

    case FIXED = 0;
    case PERCENTAGE = 1;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
