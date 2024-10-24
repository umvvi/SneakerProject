<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time_slot',
        'rate',
        'is_active',
        'remark',
    ];

    // Define any relationships if needed
}
