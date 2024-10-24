<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'special_status',
        'sells_type',
        'stand_type',
        'days',
        'logo',
        'is_active',
        'remark',
    ];

    // Define relationships if needed
}
