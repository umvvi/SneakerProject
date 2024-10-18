<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'password',
        'is_active',
        'comment',
        'created_at',
        'updated_at',
    ];
}