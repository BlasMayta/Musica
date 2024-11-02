<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;
    protected $fillable=['materia_id','nota','titulo','fechainicio','fechafinal','tiempo','descripcion'];
}
