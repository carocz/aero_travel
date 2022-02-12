<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_usuarios;
class Tipo_usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_usuarios = Tipo_usuarios::where('status',1)
                ->orderBy('id')->get(); 
        return view('TipoUsuarios.index')->with('tipo_usuarios',$tipo_usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TipoUsuarios.create');
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
        Tipo_usuarios::create($datos);
        return redirect('/tipo_usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $tipo_usuarios=Tipo_usuarios::find($id);
        return view('TipoUsuarios.read')->with('tipo_usuarios',$tipo_usuarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tipo_usuarios=Tipo_usuarios::find($id);
        return view('TipoUsuarios.edit')->with('tipo_usuarios',$tipo_usuarios);
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
        $tipo_usuarios=Tipo_usuarios::find($id);
        $tipo_usuarios->update($datos);
        return redirect('/tipo_usuarios');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $tipo_usuarios=Tipo_usuarios::find($id);
      $tipo_usuarios->status=0;
      $tipo_usuarios->save();
     return redirect('/tipo_usuarios');
    }
}
