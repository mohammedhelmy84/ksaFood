<?php

namespace App\Models\Order;

use App\Enums\Order\DiscountType;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedBy;

    protected $fillable = [
        'code',
        'discount',
        'discount_type',
        'valid_from',
        'valid_until',
        'usage_limit',
        'used_count',
    ];

    protected $casts = [
        'discount_type' => DiscountType::class
    ];
}
