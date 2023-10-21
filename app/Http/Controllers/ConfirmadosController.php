<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confirmados;
use App\Models\Estado;

class ConfirmadosController extends Controller
{
     
    //public function show(string $id): View
    //{
       
    // dd(Confirmados::find($id));
    
    

  //  public function TotalConfirmados() {
    ////    $totalCasos = Confirmados::sum('CASOS');
     //   return response($totalCasos)->header('Content-Type', 'text/plain');
   // }

   // public function confirmadosPorEstado($estadoId) {

   //     $confirmadosPorEstado = Confirmados::where('ESTADO_ID', $estadoId)->sum('CASOS');
    //    return response($confirmadosPorEstado)->header('Content-Type', 'text/plain');
    //}

     function getCasosConfirmados()
     {
        $confirmados = Confirmados::all();
        $totalCasos = $confirmados->sum('CASOS');
        echo "Casos confirmados: <b>" .$totalCasos;
     

    }

    public function getCasosConfirmadosEstado($ID){
        $estado = Estado::find($ID);
        $totalCasos =$estado->confirmados->sum('CASOS');
        echo "Casos confirmados de  <b>" .$estado->NOMBRE.":   ". $totalCasos;

    }

    public function index(){
        self::getCasosConfirmados();
       

    }

    public function show($ID)
    {
        self::getCasosConfirmadosEstado($ID);
    }

    

}


