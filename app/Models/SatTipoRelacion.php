<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatTipoRelacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_TipoRelacion',
        'descripcion',
        'status',
    ];

}
