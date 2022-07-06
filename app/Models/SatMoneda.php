<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatMoneda extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_Catalogo_Moneda',
        'descripcion',
        'decimales',
        'status',
    ];
}
