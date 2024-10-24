<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_id',
        'event_id',
        'price_id',
        'number_of_tickets',
        'date',
        'is_active',
        'remark',
    ];

    // Define relationships
    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
