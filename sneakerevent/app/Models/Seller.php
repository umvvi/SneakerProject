<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'special_status', 'category', 'stand_type', 'days', 'logo', 'is_active', 'remarks'
    ];

    public function stands() {
        return $this->hasMany(Stand::class);
    }

    public function contacts() {
        return $this->hasMany(ContactPerSeller::class);
    }
}
