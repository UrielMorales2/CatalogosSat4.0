<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatObjetoimpuesto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_ObjetoImp',
        'descripcion',
        'status',
    ];
}
