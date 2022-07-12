<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sat_Impuestos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_Impuesto',
        'descripcion',
        'Retención',
        'Traslado',
        'Local_o_federal',
        'status',
    ];
}
