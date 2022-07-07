<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatMetodoPago extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_MetodoPago',
        'descripcion',
        'status',
    ];
}
