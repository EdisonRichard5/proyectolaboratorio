<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $fillable = [
        'rol', 'nombre', 'correo','celular','cedula','password',
    ];
}
