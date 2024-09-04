<?php

namespace App\Models\Product;

use App\Enums\Product\ProductStatus;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedBy;
    protected $fillable = [
        'name',
        'description',
        'status',
        'start_order_at',
        'end_order_at',
    ];

    protected $casts = [
        'status' => ProductStatus::class
    ];
}
