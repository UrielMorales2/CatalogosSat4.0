<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sat_TasaOCuota extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'rango_o_Fijo',
       ' Valor_mínimo',
        'Valor_Maximo',
        'Impuesto',
        'Factor',
        'Traslado',
        'Retención',
        'status',
    ];
}
