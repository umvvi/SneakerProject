<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerSeller extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id', 'contact_person_id', 'is_active', 'remarks'
    ];

    public function seller() {
        return $this->belongsTo(Seller::class);
    }

    public function contactPerson() {
        return $this->belongsTo(ContactPerson::class);
    }
}
