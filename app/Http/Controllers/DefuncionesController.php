<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Defunciones;
use App\Models\Estado;

class DefuncionesController extends Controller
{
     
     function getCasosDefunciones()
     {
        $defunciones = Defunciones::all();
        $totalCasos = $defunciones->sum('CASOS');
        echo "Casos defunciones: <b>" .$totalCasos;
     

    }

    public function getCasosDefuncionesEstado($ID){
        $estado = Estado::find($ID);
        $totalCasos =$estado->defunciones->sum('CASOS');
        echo "Casos defunciones de  <b>" .$estado->NOMBRE.":   ". $totalCasos;

    }

    public function index(){
        self::getCasosDefunciones();
       

    }

    public function show($ID)
    {
        self::getCasosDefuncionesEstado($ID);
    }

    

}


