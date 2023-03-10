<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public $casts = [
        'artists' => 'array',
        'writers' => 'array'
    ];

    use HasFactory;
}
