<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'date',
        'time_slot',
        'rate',
        'is_active',
        'remark',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
