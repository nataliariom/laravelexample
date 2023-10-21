<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;

class EstadoController extends Controller
{
    public function show(string $id): View
    {
       
        echo "<B>" .Estado::find($id)-> NOMBRE. "</B><br>";
    }

    //public function index()
    //{
    //    foreach (Estado::get() as $estado){
     //       echo "<B>". $estado->nombre. "</B><br>";
            
     //   }
   // }

    public function index()
    {
        return view('estados.index');
              
    }


public function getEstados(){
    return response()->json(Estado::get());
}

 }
