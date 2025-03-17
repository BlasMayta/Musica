<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // Campos que pueden ser llenados masivamente
    protected $fillable = [
        'note',
        'accuracy'
    ];

    // Opcional: Definir tipos de datos para conversión automática
    protected $casts = [
        'accuracy' => 'float'
    ];
}
