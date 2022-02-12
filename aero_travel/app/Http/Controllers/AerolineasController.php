<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aerolineas;
use App\Models\Usuarios;
use App\Models\Ciudades;
class AerolineasController extends Controller
{
   public function index()
    {
     $aerolineas=Aerolineas::where('status',1)
                        ->orderBy('nombre')->get();
       $usuario = Usuarios::where('status',1)
                ->orderBy('id')->get(); 
     $ciudad = Ciudades::where('status',1)
                ->orderBy('id')->get();
        return view('Aerolineas.index')
        ->with('usuario',$usuario)
        ->with('ciudad',$ciudad)
        ->with('aerolineas',$aerolineas);
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
        return view('Aerolineas.create')
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
        Aerolineas::create($datos);
        return redirect('/aerolineas');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $aerolineas=Aerolineas::find($id);
        $usuario = Usuarios::where('status',1)
                ->orderBy('id')->get(); 
                 $ciudad = Ciudades::where('status',1)
                ->orderBy('id')->get();
        return view('Aerolineas.read')->with('aerolineas',$aerolineas) ->with('usuario',$usuario)
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
          $aerolineas=Aerolineas::find($id);
          $usuario = usuarios::where('status',1)
                ->orderBy('id')->get(); 
     $ciudad = Ciudades::where('status',1)
                ->orderBy('id')->get();
        return view('Aerolineas.edit')->with('aerolineas',$aerolineas)
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
        $aerolineas=Aerolineas::find($id);
        $aerolineas->update($datos);
        return redirect('/aerolineas');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $aerolineas=Aerolineas::find($id);
      $aerolineas->status=0;
      $aerolineas->save();
     return redirect('/aerolineas');
    }
}
