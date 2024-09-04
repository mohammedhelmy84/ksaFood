<?php

namespace App\Enums\Order;

enum PayType: int{

    case CASH = 0;
    case E_WALLET = 1;
    case CARD = 2;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public  function label(): array
    {
        return match($this){
            self::CASH=>['type'=>'CASH','icon'=>'las la-money-bill-wave-alt','color'=>'color:green'],
            self::E_WALLET=>['type'=>'E_WALLET','icon'=>'las la-wallet','color'=>'color:black'],
            self::CARD=>['type'=>'CARD','icon'=>'lab la-cc-mastercard','color'=>'color:purple'],
        };
    }
}
