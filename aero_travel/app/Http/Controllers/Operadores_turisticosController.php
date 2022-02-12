<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\operadores_turisticos;
use App\Models\usuarios;
use App\Models\Ciudades;
class Operadores_turisticosController extends Controller
{
     
   public function index()
    {
     $operador_turistico=Operadores_turisticos::where('status',1)
                        ->orderBy('nombre')->get();
       $usuario = Usuarios::where('status',1)
                ->orderBy('id')->get(); 
     $ciudad = Ciudades::where('status',1)
                ->orderBy('id')->get();
        return view('Operadores_turisticos.index')
        ->with('usuario',$usuario)
        ->with('ciudad',$ciudad)
        ->with('operador_turistico',$operador_turistico);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $usuario = usuarios::where('status',1)
    ->where('id',3)
                ->orderBy('id')->get(); 
     $ciudades = Ciudades::where('status',1)
                ->orderBy('id')->get();
        return view('Operadores_turisticos.create')
        ->with('usuario',$usuario)
        ->with('ciudades',$ciudades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        
        $datos=$request->all();
        Operadores_turisticos::create($datos);
        return redirect('/operadores_turisticos');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $operador_turistico=Operadores_turisticos::find($id);
        $usuario = Usuarios::where('status',1)
                ->orderBy('id')->get(); 
                 $ciudad = Ciudades::where('status',1)
                ->orderBy('id')->get();
        return view('Operadores_turisticos.read')->with('operador_turistico',$operador_turistico) ->with('usuario',$usuario)
              ->with('ciudad',$ciudad);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $operador_turistico=Operadores_turisticos::find($id);
          $usuario = usuarios::where('status',1)
                ->orderBy('id')->get(); 
     $ciudad = Ciudades::where('status',1)
                ->orderBy('id')->get();
        return view('Operadores_turisticos.edit')->with('operador_turistico',$operador_turistico)
         ->with('usuario',$usuario)
        ->with('ciudad',$ciudad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=$request->all();
        $operador_turistico=Operadores_turisticos::find($id);
        $operador_turistico->update($datos);
        return redirect('/operadores_turisticos');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $operador_turistico=Operadores_turisticos::find($id);
      $operador_turistico->status=0;
      $operador_turistico->save();
     return redirect('/operadores_turisticos');
    }
}
