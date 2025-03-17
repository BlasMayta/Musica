<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    // Indica explícitamente el nombre de la tabla si es "audio"
    protected $table = 'audio';

    protected $fillable = ['features'];

    protected $casts = [
        'features' => 'array',
    ];
  
    
}
