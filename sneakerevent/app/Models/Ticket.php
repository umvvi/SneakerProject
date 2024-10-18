<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_id', 'event_id', 'price_id', 'quantity', 'date', 'is_active', 'remarks', 'name', 'email', 'location'
    ];

    public function visitor(): BelongsTo
    {
        return $this->belongsTo(Visitor::class);
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function price(): BelongsTo
    {
        return $this->belongsTo(Price::class);
    }

    // Optionally, if you want to define any custom methods or scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
