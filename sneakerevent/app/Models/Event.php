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
        'available_tickets',
        // Add other fields as necessary
    ];

    // Define any relationships here, for example:
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'evenementId'); // Adjust as needed
    }

    // You can add more relationships or methods if needed
}
