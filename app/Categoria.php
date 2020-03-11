<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias'; // nombre de la tabla de la db
    protected $primaryKey = 'idCategoria'; // de la db

    protected $fillable = [ // para los atributos de la tabla
        'nombre' ,
    ];
}
