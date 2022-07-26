<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatColonias extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_colonia',
        'codigoPostal_id',
        'nombreAsentamiento',
        'status',
    ];
}
