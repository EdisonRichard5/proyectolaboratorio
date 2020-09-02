<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    protected $fillable = [
        'usuario', 'tipo','problema','marca','modelo','imei','solucion','fecha_ingreso','fecha_entrega','etapa','precio','calificacion',
    ];
}
