<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'location',
        'number_of_tickets_per_time_slot',
        'available_stands',
        'is_active',
        'remark',
    ];

    // Define any relationships if needed
}
