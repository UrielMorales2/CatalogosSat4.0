<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatUsoCFDI extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_UsoCFDI',
        'descripcion',
        'PersonaFisica',
        'PersonaMoral',
        'status',
    ];
}
