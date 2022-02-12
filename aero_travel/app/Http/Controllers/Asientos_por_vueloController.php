<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vuelos;
use App\Models\asientos_por_vuelo;
class Asientos_por_vueloController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $asientos_por_vuelo=Asientos_por_vuelo::where('status',1)
                        ->orderBy('id')->get();
     $vuelos=Vuelos::where('status',1)
                        ->orderBy('id')->get();
        return view('Asientos_por_vuelo.index')->with('asientos_por_vuelo',
            $asientos_por_vuelo)->with('vuelos',
            $vuelos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $vuelos = Vuelos::where('status',1)
                ->orderBy('id')->get(); 
        return view('Asientos_por_vuelo.create')
        ->with('vuelos',$vuelos);
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
        Asientos_por_vuelo::create($datos);
        return redirect('/asientos_por_vuelo');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asientos_por_vuelo=Asientos_por_vuelo::find($id);
        $vuelos = Vuelos::where('status',1)
                ->orderBy('id')->get(); 
        return view('Asientos_por_vuelo.read')->with('asientos_por_vuelo',$asientos_por_vuelo) ->with('vuelos',$vuelos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $asientos_por_vuelo=Asientos_por_vuelo::find($id);
        $vuelos = Vuelos::where('status',1)
                ->orderBy('id')->get(); 
        return view('Asientos_por_vuelo.edit')->with('asientos_por_vuelo',$asientos_por_vuelo) ->with('vuelos',$vuelos);
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
        $asientos_por_vuelo=Asientos_por_vuelo::find($id);
        $asientos_por_vuelo->update($datos);
        return redirect('/asientos_por_vuelo');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asientos_por_vuelo=Asientos_por_vuelo::find($id);
      $asientos_por_vuelo->status=0;
      $asientos_por_vuelo->save();
     return redirect('/asientos_por_vuelo');
    }

    public function vuelo($id){
    $vuelos = Vuelos::where('id',$id)
                ->orderBy('id')->get(); 
        return $vuelos;
    }
}
