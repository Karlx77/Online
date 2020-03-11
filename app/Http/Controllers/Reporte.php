<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reporte extends Controller
{


    public function productos_por_depatamento(){


        return view('reportes.productos_mas_vendidos_departamento');
    }
}
