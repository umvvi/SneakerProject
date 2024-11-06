<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'price_id',
        'number_of_tickets',
        'date',
        'is_active',
        'remark',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }


    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
