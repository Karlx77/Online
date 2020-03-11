<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'idProducto';
    protected $fillable = [
        'nombre',
        'precio',
        'cantidad',
        'idSubCategoria'

    ];
}
