<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id', 'stand_type', 'price', 'is_rented', 'is_active', 'remarks'
    ];

    public function seller() {
        return $this->belongsTo(Seller::class);
    }
}
