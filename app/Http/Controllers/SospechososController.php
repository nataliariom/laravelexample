<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sospechosos;
use App\Models\Estado;

class SospechososController extends Controller
{
     

     function getCasosSospechosos()
     {
        $sospechosos = Sospechosos::all();
        $totalCasos = $sospechosos->sum('CASOS');
        echo "Casos sospechosos: <b>" .$totalCasos;
     

    }

    public function getCasosSospechososEstado($ID){
        $estado = Estado::find($ID);
        $totalCasos =$estado->sospechosos->sum('CASOS');
        echo "Casos sospechosos de  <b>" .$estado->NOMBRE.":   ". $totalCasos;

    }

    public function index(){
        self::getCasosSospechosos();
       

    }

    public function show($ID)
    {
        self::getCasosSospechososEstado($ID);
    }

    

}



