<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kurss extends Model
{
    use HasFactory;

    protected $fillable = [
        'nosaukums',
        'apraksts',
        'banera_adrese',
        'cilveku_skaits',
    ];
}
