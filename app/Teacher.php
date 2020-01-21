<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'grado', 'fecha_nacimiento', 'direccion', 'telefono'
    ];
}
