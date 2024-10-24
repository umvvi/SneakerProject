<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'stand_type',
        'price',
        'rented_status',
        'is_active',
        'remark',
    ];

    // Define relationships
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
