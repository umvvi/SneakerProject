<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = [
        'first_name',
        'last_name',
        'ticket_type',
        'location',
    ];
}
