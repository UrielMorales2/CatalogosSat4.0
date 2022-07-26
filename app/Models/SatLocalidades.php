<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatLocalidades extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_L',
        'id_Localidad',
        'estado_id',
        'descripcion',
        'status',
    ];
}
