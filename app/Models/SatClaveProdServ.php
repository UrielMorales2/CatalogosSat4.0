<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatClaveProdServ extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_ProdServ',
        'descripcion',
        'Incluir_IVA_trasladado',
        'Incluir_IEPS_trasladado',
        'status',
    ];
}
