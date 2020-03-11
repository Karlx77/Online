<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table='ciudads';
    protected $primaryKey='idCiudad';
    protected $fillable = [
        'nombre',
        'precio',
        'idUsuarioAdmin'
        ];
}
