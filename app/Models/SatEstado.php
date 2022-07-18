<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatEstado extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_estado',
        'pais_id',
        'nombreEstado',
        'status',
    ];
}
