<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_categoria extends Model
{
    protected $table='sub_categorias';
    protected $primaryKey='idSubCategoria';
    protected $fillable = [
        'nombre',
        'idCategoria'
    ];
}
