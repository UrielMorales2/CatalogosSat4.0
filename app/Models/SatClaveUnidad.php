<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatClaveUnidad extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_ClaveUnidad',
        'nombre',
        'descripcion',
        'nota',
        'status',
    ];
}




