<?php

namespace App\Models;

use App\Models\Vendor\VendorBranch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'branch_id',
        'vendor_id',
        'user_id',
    ];


    public function branch()
    {
        return $this->belongsTo(VendorBranch::class,'branch_id');
    }

    public function supervisor()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}

