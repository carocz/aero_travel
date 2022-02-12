<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estados;
use App\Models\ciudades;

class CiudadesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estados::where('status',1)
                ->orderBy('id')->get(); 
        $ciudades=Ciudades::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        return view('Ciudades.index')->with('ciudades',
            $ciudades)
         ->with('estados',$estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados=Estados::select('id','nombre')
        ->where('status',1)
        ->orderBy('nombre')->get();
        return view('Ciudades.create')
        ->with('estados',$estados);
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
        Ciudades::create($datos);
        return redirect('/ciudades');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ciudades=Ciudades::find($id);
        $estados = Estados::where('status',1)
                ->orderBy('id')->get(); 
        return view('Ciudades.read')->with('ciudades',$ciudades)
        ->with('estados',$estados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        $ciudades=Ciudades::find($id);
        $estados = Estados::where('status',1)
                ->orderBy('id')->get(); 
        return view('Ciudades.edit')->with('ciudades',$ciudades)
        ->with('estados',$estados);
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
        $ciudades=Ciudades::find($id);
        $ciudades->update($datos);
        return redirect('/ciudades');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $ciudades=Ciudades::find($id);
      $ciudades->status=0;
      $ciudades->save();
     return redirect('/ciudades');
    }
}
