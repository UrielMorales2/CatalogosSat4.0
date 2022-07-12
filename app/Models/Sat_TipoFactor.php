<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sat_TipoFactor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_TipoFactor',
        'status',
    ];
}
