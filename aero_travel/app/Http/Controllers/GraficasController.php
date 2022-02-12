<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\tipo_usuarios;
use App\Models\vuelos;
class GraficasController extends Controller
{
    public function grafica(){

        return view('Graficas.listado');
    }
    public function grafica_pie(){
        $usuarios=Usuarios::where('status',1)
        ->orderBy('nombre')->get();
         return view('Graficas.grafica_pie')->with('usuarios',$usuarios);
    }
    public function grafica_barras(){
        $tipo_usuarios = Tipo_usuarios::where('status',1)
                ->orderBy('id')->get(); 
        return view('Graficas.grafica_barras')->with('tipo_usuarios',$tipo_usuarios);
    }
    public function grafica_areas(){
        $vuelos = Vuelos::where('status',1)
                ->orderBy('id')->get();
        return view('Graficas.grafica_areas')->with('vuelos',
            $vuelos);
    }
}
