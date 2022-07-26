<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatMunicipios extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_M',
        'id_municipio',
        'estado_id',
        'descripcion',
        'status',
    ];
}
