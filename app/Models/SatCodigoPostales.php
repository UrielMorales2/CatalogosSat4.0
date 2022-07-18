<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatCodigoPostales extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_CodigoPostal',
        'estado_id',
        'municipio_id',
        'localidad_id',
        'estimulo_franja_fronterisa',
        'status',
    ];
}
