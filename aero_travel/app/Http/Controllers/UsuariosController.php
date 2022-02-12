<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_usuarios;
use App\Models\Usuarios;
class UsuariosController extends Controller
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
        $usuarios=Usuarios::where('status',1)
        ->orderBy('id')
                        ->orderBy('nombre')->get();
        return view('Usuarios.index')->with('usuarios',
            $usuarios)
         ->with('tipo_usuarios',$tipo_usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_usuarios = Tipo_usuarios::where('status',1)
                ->orderBy('id')->get(); 
        return view('Usuarios.create')
        ->with('tipo_usuarios',$tipo_usuarios);
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
        Usuarios::create($datos);
        return redirect('/usuarios');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios=Usuarios::find($id);
        $tipo_usuarios = Tipo_usuarios::where('status',1)
                ->orderBy('id')->get(); 
        return view('Usuarios.read')->with('usuarios',$usuarios)
        ->with('tipo_usuarios',$tipo_usuarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
          $usuarios=Usuarios::find($id);
        $tipo_usuarios = Tipo_usuarios::where('status',1)
                ->orderBy('id')->get(); 
        return view('Usuarios.edit')->with('usuarios',$usuarios)
        ->with('tipo_usuarios',$tipo_usuarios);
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
        $usuarios=Usuarios::find($id);
        $usuarios->update($datos);
        return redirect('/usuarios');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $usuarios=Usuarios::find($id);
      $usuarios->status=0;
      $usuarios->save();
     return redirect('/usuarios');
    }
}
