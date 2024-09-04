<?php

namespace App\Models\Order;

use App\Enums\Order\OrderStatus;
use App\Enums\Order\PayStatus;
use App\Enums\Order\PayType;
use App\Enums\Order\ReciveType;
use App\Models\Customer\CustomerAddress;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Order\OrderItem;
use App\Models\Vendor\VendorBranch;

class Order extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedBy;

    protected $fillable = [
        'order_number',
        'status',
        'pay_status',
        'pay_type',
        'receive_type',
        'coupon_id',
        'customer_id',
    ];

    protected $casts = [
        'status' => OrderStatus::class,
        'pay_status' => PayStatus::class,
        'pay_type' => PayType::class,
        'receive_type' => ReciveType::class,
    ];

    private function generateOrderNumber(): string
    {
        $timestampStr = substr((string)time(), 0, 6);

        return "OR-" . generateUniqNumber(4) . $timestampStr;
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->order_number = $model->generateOrderNumber();
        });

    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'customer_id');
    }

 

    public function customer(): BelongsTo
    {
        return $this->belongsTo(CustomerAddress::class,'customer_id');
    }

    public function coupon(): BelongsTo
    {
        return $this->belongsTo(Coupon::class);
    }

    Public function orderitems(){
        return  $this->hasMany(OrderItem::class,'order_id');
    }

       // public function branch(): BelongsTo
    // {
    //     return $this->belongsTo(VendorBranch::class,'vendor_id');
    // }
    
    public function branch()
    {
        return $this->belongsTo(VendorBranch::class,'branch_id');
    }

   
}
