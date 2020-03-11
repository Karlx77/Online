<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_pedido extends Model
{
    protected $table='detalle_pedidos';
    protected $primaryKey='idDetallePedido';
    protected $fillable = [
        'cantidad',
        'subTotal',
        'idProducto',
        'idPedido'
    ];
}
