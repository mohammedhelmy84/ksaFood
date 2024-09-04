<?php

namespace App\Models\Order;

use App\Enums\Order\OrderType;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product\Product;

class OrderItem extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedBy;

    protected $fillable = [
        'quantity',
        'price',
        'order_type',
        'order_id',
        'product_id',
        'package_id',
    ];

    protected $casts = [
        'order_type' => OrderType::class
    ];
    // Public function order(){
    //     return  $this->belongsTo(Order::class,'order_id');
    // }
    public function order()
    {
     
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function getTotalAttribute()
    {
        return $this->quantity * $this->price;
    }


}
