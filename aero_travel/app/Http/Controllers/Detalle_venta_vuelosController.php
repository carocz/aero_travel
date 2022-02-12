<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalle_venta_vuelos;
use App\Models\vuelos;
use App\Models\venta;
class Detalle_venta_vuelosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $detalle_venta_vuelos=Detalle_venta_vuelos::where('status',1)
                        ->orderBy('id')->get();
        return view('Detalle_venta_vuelo.index')->with('detalle_venta_vuelos',
            $detalle_venta_vuelos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venta = Venta::where('status',1)
                ->orderBy('id')->get();
        $vuelos = Vuelos::where('status',1)
                ->orderBy('id')->get();
        return view('Detalle_venta_vuelo.create') ->with('venta',$venta)
            ->with('vuelos',$vuelos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $detalle_venta_vuelos=$request->all();
        Detalle_venta_vuelos::create($detalle_venta_vuelos);
        return redirect('/detalle_venta_vuelos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalle_venta_vuelos=Detalle_venta_vuelos::find($id);
        $venta = Venta::where('status',1)
                ->orderBy('id')->get();
        $vuelos = Vuelos::where('status',1)
                ->orderBy('id')->get();
        return view('Detalle_venta_vuelo.read')->with('detalle_venta_vuelos',$detalle_venta_vuelos) ->with('venta',$venta)
            ->with('vuelos',$vuelos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalle_venta_vuelos=Detalle_venta_vuelos::find($id);
        $venta = Venta::where('status',1)
                ->orderBy('id')->get();
        $vuelos = Vuelos::where('status',1)
                ->orderBy('id')->get();
        return view('Detalle_venta_vuelo.edit')->with('detalle_venta_vuelos',$detalle_venta_vuelos) ->with('venta',$venta)
            ->with('vuelos',$vuelos);
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
        $detalle_venta_vuelos=Detalle_venta_vuelos::find($id);
        $detalle_venta_vuelos->update($datos);
        return redirect('/detalle_venta_vuelos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos=$request->all();
        $detalle_venta_vuelos=Detalle_venta_vuelos::find($id);
        $detalle_venta_vuelos->update($datos);
        return redirect('/detalle_venta_vuelos');
    }
}