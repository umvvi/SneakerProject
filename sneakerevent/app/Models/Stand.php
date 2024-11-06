<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'stand_type',
        'price',
        'rented_status',
        'is_active',
        'remark',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
