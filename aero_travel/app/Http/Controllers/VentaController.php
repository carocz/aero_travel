<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\venta;
use App\Models\bancos;
class VentaController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $venta=Venta::where('status',1)
                        ->orderBy('id')->get();
          $cliente = usuarios::where('status',1)
                ->orderBy('id')->get();
           $banco = Bancos::where('status',1)
                ->orderBy('id')->get(); 
        return view('Ventas.index')->with('cliente',$cliente) ->with('venta',$venta)
        ->with('banco',$banco);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cliente = Usuarios::where('id_tipo_usuario',3)
                ->orderBy('id')->get();
        $banco = Bancos::where('status',1)
                ->orderBy('id')->get();
        return view('Ventas.create')->with('cliente',$cliente)
            ->with('banco',$banco);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $venta=$request->all();
        Venta::create($venta);
        return redirect('/venta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                    $venta=Venta::find($id);
        $cliente = Usuarios::where('id_tipo_usuario',3)
                ->orderBy('id')->get();
        $banco = Bancos::where('status',1)
                ->orderBy('id')->get();
        return view('Ventas.read')->with('cliente',$cliente) ->with('venta',$venta)
            ->with('banco',$banco);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                    $venta=Venta::find($id);
        $cliente = Usuarios::where('id_tipo_usuario',3)
                ->orderBy('id')->get();
        $banco = Bancos::where('status',1)
                ->orderBy('id')->get();
        return view('Ventas.edit')->with('cliente',$cliente) ->with('venta',$venta)
            ->with('banco',$banco);
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
        $venta=Venta::find($id);
        $venta->update($datos);
        return redirect('/venta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $venta=Venta::find($id);
      $venta->status=0;
      $venta->save();
     return redirect('/venta');
    }
}