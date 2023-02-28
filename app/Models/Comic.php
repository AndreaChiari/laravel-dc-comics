<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public $comic = ['artists', 'writers' => 'array'];

    use HasFactory;
}
