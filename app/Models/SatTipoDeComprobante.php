<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatTipoDeComprobante extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_TipoComprobante',
        'descripcion',
        'status',
    ];
}
