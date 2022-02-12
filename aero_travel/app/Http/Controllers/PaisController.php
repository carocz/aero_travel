<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pais;

class PaisController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pais = Pais::where('status',1)
                ->orderBy('id')->get(); 
        return view('Pais.index')->with('pais',$pais);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pais.create');
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
        Pais::create($datos);
        return redirect('/pais');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $pais=Pais::find($id);
        return view('Pais.read')->with('pais',$pais);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $pais=Pais::find($id);
        return view('Pais.edit')->with('pais',$pais);
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
        $pais=Pais::find($id);
        $pais->update($datos);
        return redirect('/pais');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pais=Pais::find($id);
      $pais->status=0;
      $pais->save();
     return redirect('/pais');
    }
}
