<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatNumPedimentoA extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Aduana_id',
        'Patente',
        'Ejercicio',
        'Cantidad',
        'status ',
    ];
}
