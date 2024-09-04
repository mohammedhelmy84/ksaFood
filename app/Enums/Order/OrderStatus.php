<?php

namespace App\Enums\Order;

enum OrderStatus: int{

    case INACTIVE = 0;
    case PREPARE = 1;

    case DONE = 2;

    case RECEIVED = 3;

    case CANCELLED = 4;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public  function label(): array
    {
        return match($this){
            self::INACTIVE=>['label'=>'inactive','color'=>'badge text-bg-danger','icon'=>'las la-times','style'=>'color:#fff !important; font-weight:bold; width:100px !important;'],
            self::PREPARE=>['label'=>'prepare','color'=>'badge text-bg-success','icon'=>'las la-check','style'=>'color:#fff !important; font-weight:bold; width:100px !important;'],
        };
    }

}
