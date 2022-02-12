<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pais;
use App\Models\estados;

class EstadosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $pais=Pais::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        $estados = Estados::where('status',1)
                ->orderBy('id')->get(); 
        return view('Estados.index')->with('estados',
            $estados)
         ->with('pais',$pais);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pais=Pais::select('id','nombre')
        ->where('status',1)
        ->orderBy('nombre')->get();
        return view('Estados.create')
        ->with('pais',$pais);
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
        Estados::create($datos);
        return redirect('/estados');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estados=Estados::find($id);
        $pais = Pais::where('status',1)
                ->orderBy('id')->get(); 
        return view('Estados.read')->with('estados',$estados)
        ->with('pais',$pais);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        $estados=Estados::find($id);
        $pais= Pais::where('status',1)
                ->orderBy('id')->get(); 
        return view('Estados.edit')->with('pais',$pais)
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
        $estados=Estados::find($id);
        $estados->update($datos);
        return redirect('/estados');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $estados=Estados::find($id);
      $estados->status=0;
      $estados->save();
     return redirect('/estados');
    }
}
