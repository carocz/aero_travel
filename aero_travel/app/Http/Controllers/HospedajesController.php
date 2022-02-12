<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospedajes;
use App\Models\ciudades;
use App\Models\hoteles;
class HospedajesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospedajes = Hospedajes::where('status',1)
                ->orderBy('id')->get(); 
        $hotel = Hoteles::where('status',1)
                ->orderBy('id')->get(); 
        $ciudades=Ciudades::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        return view('Hospedaje.index')->with('hospedajes',
            $hospedajes)
         ->with('ciudades',$ciudades)
         ->with('hotel',$hotel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $hotel = Hoteles::where('status',1)
                ->orderBy('id')->get(); 
        $ciudades=Ciudades::select('id','nombre')
        ->where('status',1)
        ->orderBy('nombre')->get();
        return view('Hospedaje.create')
        ->with('ciudades',$ciudades)
         ->with('hotel',$hotel);
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
        Hospedajes::create($datos);
        return redirect('/hospedajes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $hospedajes = Hospedajes::find($id); 
             $hotel = Hoteles::where('status',1)
                ->orderBy('id')->get(); 
        $ciudades=Ciudades::select('id','nombre')
        ->where('status',1)
        ->orderBy('nombre')->get();
        return view('Hospedaje.read')
        ->with('hospedajes',
            $hospedajes)
        ->with('ciudades',$ciudades)
         ->with('hotel',$hotel);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospedajes = Hospedajes::find($id); 
             $hotel = Hoteles::where('status',1)
                ->orderBy('id')->get(); 
        $ciudades=Ciudades::select('id','nombre')
        ->where('status',1)
        ->orderBy('nombre')->get();
        return view('Hospedaje.edit')
        ->with('hospedajes',
            $hospedajes)
        ->with('ciudades',$ciudades)
         ->with('hotel',$hotel);
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
        $hospedajes=Hospedajes::find($id);
        $hospedajes->update($datos);
        return redirect('/hospedajes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $hospedajes=Hospedajes::find($id);
      $hospedajes->status=0;
      $hospedajes->save();
     return redirect('/hospedajes');
    }
}
