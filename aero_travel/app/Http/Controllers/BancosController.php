<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bancos;

class BancosController extends Controller
{
    /** Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancos = Bancos::where('status',1)
                ->orderBy('id')->get(); 
        return view('Bancos.index')->with('bancos',$bancos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bancos.create');
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
        Bancos::create($datos);
        return redirect('/bancos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $bancos=Bancos::find($id);
        return view('Bancos.read')->with('bancos',$bancos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $bancos=Bancos::find($id);
        return view('Bancos.edit')->with('bancos',$bancos);
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
        $bancos=Bancos::find($id);
        $bancos->update($datos);
        return redirect('/bancos');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $bancos=Bancos::find($id);
      $bancos->status=0;
      $bancos->save();
     return redirect('/bancos');
    }
}