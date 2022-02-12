<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\operadores_turisticos;
use App\Models\ciudades;
use App\Models\actividades;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividades::where('status',1)
                ->orderBy('id')->get(); 
        $operador_turistico = Operadores_turisticos::where('status',1)
                ->orderBy('id')->get(); 
        $ciudades=Ciudades::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        return view('Actividades.index')->with('actividades',
            $actividades)
         ->with('ciudades',$ciudades)
         ->with('operador_turistico',$operador_turistico);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operador_turistico = Operadores_turisticos::select('id','nombre')
        ->where('status',1)
         ->orderBy('id')->get();
        $ciudades=Ciudades::select('id','nombre')
        ->where('status',1)
        ->orderBy('nombre')->get();
        return view('Actividades.create')
        ->with('ciudades',$ciudades)
         ->with('operador_turistico',$operador_turistico);
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
        Actividades::create($datos);
        return redirect('/actividades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividades=Actividades::find($id);
        $ciudades = Ciudades::where('status',1)
                ->orderBy('id')->get(); 
        $operador_turistico = Operadores_turisticos::where('status',1)
                ->orderBy('id')->get(); 
        return view('Actividades.read')->with('actividades',$actividades)
        ->with('ciudades',$ciudades)
         ->with('operador_turistico',$operador_turistico);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $actividades=Actividades::find($id);
        $ciudades = Ciudades::where('status',1)
                ->orderBy('id')->get(); 
        $operador_turistico = Operadores_turisticos::where('status',1)
                ->orderBy('id')->get(); 
        return view('Actividades.edit')->with('actividades',$actividades)
        ->with('ciudades',$ciudades)
         ->with('operador_turistico',$operador_turistico);
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
        $actividades=Actividades::find($id);
        $actividades->update($datos);
        return redirect('/actividades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $actividades=Actividades::find($id);
      $actividades->status=0;
      $actividades->save();
     return redirect('/actividades');
    }
}
