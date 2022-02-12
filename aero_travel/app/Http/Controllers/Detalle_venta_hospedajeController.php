<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalle_venta_hospedaje;
use App\Models\hospedajes;
use App\Models\venta;
class Detalle_venta_hospedajeController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $detalle_venta_hospedaje=Detalle_venta_hospedaje::where('status',1)
                        ->orderBy('id')->get();
        return view('Detalle_venta_hospedajes.index')->with('detalle_venta_hospedaje',
            $detalle_venta_hospedaje);
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
        $hospedajes = Hospedajes::where('status',1)
                ->orderBy('id')->get();
        return view('Detalle_venta_hospedajes.create')->with('venta',$venta)
            ->with('hospedajes',$hospedajes);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $detalle_venta_hospedaje=$request->all();
        Detalle_venta_hospedaje::create($detalle_venta_hospedaje);
        return redirect('/detalle_venta_hospedaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalle_venta_hospedaje=Detalle_venta_hospedaje::find($id);
        $venta = Venta::where('status',1)
                ->orderBy('id')->get();
        $hospedajes = Hospedajes::where('status',1)
                ->orderBy('id')->get();
        return view('Detalle_venta_hospedajes.read')->with('detalle_venta_hospedaje',$detalle_venta_hospedaje) ->with('venta',$venta)
            ->with('hospedajes',$hospedajes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalle_venta_hospedaje=Detalle_venta_hospedaje::find($id);
        $venta = Venta::where('status',1)
                ->orderBy('id')->get();
        $hospedajes = Hospedajes::where('status',1)
                ->orderBy('id')->get();
        return view('Detalle_venta_hospedajes.edit')->with('detalle_venta_hospedaje',$detalle_venta_hospedaje) ->with('venta',$venta)
            ->with('hospedajes',$hospedajes);
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
        $detalle_venta_hospedaje=Detalle_venta_hospedaje::find($id);
        $detalle_venta_hospedaje->update($datos);
        return redirect('/detalle_venta_hospedaje');
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
        $detalle_venta_hospedaje=Detalle_venta_hospedaje::find($id);
        $detalle_venta_hospedaje->update($datos);
        return redirect('/detalle_venta_hospedaje');
    }
}
