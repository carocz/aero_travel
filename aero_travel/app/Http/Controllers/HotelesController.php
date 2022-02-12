<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hoteles;
use App\Models\Usuarios;
use App\Models\Ciudades;
class HotelesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $hoteles=Hoteles::where('status',1)
                        ->orderBy('nombre')->get();
       $usuario = Usuarios::where('status',1)
                ->orderBy('id')->get(); 
     $ciudad = Ciudades::where('status',1)
                ->orderBy('id')->get();
        return view('Hoteles.index')
        ->with('usuario',$usuario)
        ->with('ciudad',$ciudad)
        ->with('hoteles',$hoteles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $usuario = usuarios::where('status',1)
                ->orderBy('id')->get(); 
     $ciudades = Ciudades::where('status',1)
                ->orderBy('id')->get();
        return view('Hoteles.create')
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
        Hoteles::create($datos);
        return redirect('/hoteles');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $hoteles=Hoteles::find($id);
        $usuario = Usuarios::where('status',1)
                ->orderBy('id')->get(); 
        return view('Hoteles.read')->with('hoteles',$hoteles) ->with('usuario',$usuario);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $hoteles=Hoteles::find($id);
          $usuario = usuarios::where('status',1)
                ->orderBy('id')->get(); 
     $ciudad = Ciudades::where('status',1)
                ->orderBy('id')->get();
        return view('Hoteles.edit')->with('hoteles',$hoteles)
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
        $hoteles=Hoteles::find($id);
        $hoteles->update($datos);
        return redirect('/hoteles');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $hoteles=Hoteles::find($id);
      $hoteles->status=0;
      $hoteles->save();
     return redirect('/hoteles');
    }
}
