<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatFormaPago extends Model
{
    use HasFactory;
    protected $fillable = [
        'catalogo_FormaPago',
        'descripcion',
        'status',
    ];
}
