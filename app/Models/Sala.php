<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'jugador_1',
        'jugador_2',
        'movimiento_j1',
        'movimiento_j2',
        'mensaje_j1',
        'mensaje_j2',
        'privada',
    ];
}
