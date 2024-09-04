<?php

namespace App\Models\Product;

use App\Enums\Product\PackageStatus;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedBy;


    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
        'discount',
        'start_order_at',
        'end_order_at',
        'quantity',
    ];

    protected $casts = [
        'status' => PackageStatus::class,
    ];
}
