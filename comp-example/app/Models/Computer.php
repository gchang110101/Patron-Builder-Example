<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $fillable = ['cpu', 'ram', 'storage'];

    // Usa casting para convertir el campo `parts` en un array automáticamente
    protected $casts = [
        'parts' => 'array',
    ];
}
