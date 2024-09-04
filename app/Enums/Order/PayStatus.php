<?php

namespace App\Enums\Order;

enum PayStatus: int{

    case UNPAID = 0;
    case PAID = 1;
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public  function label(): array
    {
        return match($this){
            self::UNPAID=>['label'=>'UNPAID','color'=>'badge text-bg-danger','icon'=>'las la-times','style'=>'color:#fff !important; font-weight:bold; width:100px !important;'],
            self::PAID=>['label'=>'PAID','color'=>'badge text-bg-success','icon'=>'las la-check','style'=>'color:#fff !important; font-weight:bold; width:100px !important;'],
        };
    }

    
}
