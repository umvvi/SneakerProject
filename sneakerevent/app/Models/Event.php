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
        'number_of_tickets_per_timeslot',
        'available_stands',
        'image',
        'is_active',
        'remark',
    ];

    // In Event.php
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    // In Event.php
    public function prices()
    {
        return $this->hasManyThrough(Price::class, Ticket::class, 'event_id', 'id', 'id', 'price_id');
    }


}
