<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatRegimenFiscal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_RegimenFiscal',
        'descripcion',
        'PersonaFisica',
        'PersonaMoral',
        'status',
    ];
}
