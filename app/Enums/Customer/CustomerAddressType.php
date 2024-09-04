<?php

namespace App\Enums\Customer;

enum CustomerAddressType: int{

    case MAIN_ADDRESS = 0;
    case SEC_ADDRESS = 1;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
