<?php

namespace App\Enums\Order;

enum ReciveType: int{
    case ON_BRANCH = 0;
    case DELIVERY = 1;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public  function label(): array
    {
        return match($this){
            self::ON_BRANCH=>['label'=>'ON BRANCH','color'=>'badge text-bg-danger','icon'=>'las la-store-alt'],
            self::DELIVERY=>['label'=>'DELIVERY','color'=>'badge text-bg-success','icon'=>'las la-truck'],
        };
    }
}
