<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Negativos;
use App\Models\Estado;

class NegativosController extends Controller
{
     

     function getCasosNegativos()
     {
        $negativos = Negativos::all();
        $totalCasos = $negativos->sum('CASOS');
        echo "Casos negativos: <b>" .$totalCasos;
     

    }

    public function getCasosNegativosEstado($ID){
        $estado = Estado::find($ID);
        $totalCasos =$estado->negativos->sum('CASOS');
        echo "Casos negativos de  <b>" .$estado->NOMBRE.":   ". $totalCasos;

    }

    public function index(){
        self::getCasosNegativos();
       

    }

    public function show($ID)
    {
        self::getCasosNegativosEstado($ID);
    }

    

}

