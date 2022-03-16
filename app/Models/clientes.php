<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class clientes extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'cedula',
        'nombre_apellido',
        'nombre_mascota'
    ];
}
