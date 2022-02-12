<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aerolineas;
use App\Models\ciudades;
use App\Models\vuelos;
class VuelosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vuelos = Vuelos::where('status',1)
                ->orderBy('id')->get(); 
        $aerolineas = Aerolineas::where('status',1)
                ->orderBy('id')->get(); 
        $ciudad_origen =Ciudades::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        $ciudad_destino =Ciudades::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        return view('Vuelos.index')->with('vuelos',
            $vuelos)
         ->with('ciudad_origen',$ciudad_origen)
         ->with('ciudad_destino',$ciudad_destino)
         ->with('aerolineas',$aerolineas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aerolineas = Aerolineas::where('status',1)
                ->orderBy('id')->get(); 
        $ciudad_origen =Ciudades::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        $ciudad_destino =Ciudades::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        return view('Vuelos.create')
         ->with('ciudad_origen',$ciudad_origen)
         ->with('ciudad_destino',$ciudad_destino)
         ->with('aerolineas',$aerolineas);
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
        Vuelos::create($datos);
        return redirect('/vuelos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $vuelos=Vuelos::find($id);
                $aerolineas = Aerolineas::where('status',1)
                ->orderBy('id')->get(); 
        $ciudad_origen =Ciudades::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        $ciudad_destino =Ciudades::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        return view('Vuelos.read')
         ->with('vuelos',$vuelos)
         ->with('ciudades',$ciudad_origen)
         ->with('ciudades',$ciudad_destino)
         ->with('aerolineas',$aerolineas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                   $vuelos=Vuelos::find($id);
                $aerolineas = Aerolineas::where('status',1)
                ->orderBy('id')->get(); 
        $ciudad_origen =Ciudades::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        $ciudad_destino =Ciudades::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        return view('Vuelos.edit')
         ->with('vuelos',$vuelos)
         ->with('ciudades',$ciudad_origen)
         ->with('ciudades',$ciudad_destino)
         ->with('aerolineas',$aerolineas);
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
        $vuelos=Vuelos::find($id);
        $vuelos->update($datos);
        return redirect('/vuelos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $vuelos=Vuelos::find($id);
      $vuelos->status=0;
      $vuelos->save();
     return redirect('/vuelos');
    }

    public function ciudadDestino($id)
    {
        $ciudad_destino =Ciudades::where('id','!=',$id)
        ->get();

        return $ciudad_destino;
    }
}
