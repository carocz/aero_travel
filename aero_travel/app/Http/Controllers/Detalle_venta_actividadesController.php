<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalle_venta_actividades;
use App\Models\actividades;
use App\Models\venta;
class Detalle_venta_actividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              $detalle_venta_actividades=Detalle_venta_actividades::where('status',1)
                ->orderBy('id')->get();
        $venta = Venta::where('status',1)
                ->orderBy('id')->get();
        $actividades = Actividades::where('status',1)
                ->orderBy('id')->get();
        return view('Detalle_venta_actividades.index')->with('detalle_venta_actividades',$detalle_venta_actividades) ->with('venta',$venta)
            ->with('actividades',$actividades);
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
        $actividades = Actividades::where('status',1)
                ->orderBy('id')->get();
        return view('Detalle_venta_actividades.create')
         ->with('venta',$venta)
            ->with('actividades',$actividades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $detalle_venta_actividades=$request->all();
        Detalle_venta_actividades::create($detalle_venta_actividades);
        return redirect('/detalle_venta_actividades');
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalle_venta_actividades=Detalle_venta_actividades::find($id);
        $venta = Venta::where('status',1)
                ->orderBy('id')->get();
        $actividades = Actividades::where('status',1)
                ->orderBy('id')->get();
        return view('Detalle_venta_actividades.read')->with('detalle_venta_actividades',$detalle_venta_actividades) ->with('venta',$venta)
            ->with('actividades',$actividades);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalle_venta_actividades=Detalle_venta_actividades::find($id);
        $venta = Venta::where('status',1)
                ->orderBy('id')->get();
        $actividades = Actividades::where('status',1)
                ->orderBy('id')->get();
        return view('Detalle_venta_actividades.edit')->with('detalle_venta_actividades',$detalle_venta_actividades) ->with('venta',$venta)
            ->with('actividades',$actividades);
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
        $detalle_venta_actividades=Detalle_venta_actividades::find($id);
        $detalle_venta_actividades->update($datos);
        return redirect('/detalle_venta_actividades');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $detalle_venta_actividades=Detalle_venta_actividades::find($id);
      $detalle_venta_actividades->status=0;
      $detalle_venta_actividades->save();
        return redirect('/detalle_venta_actividades');
    }
    public function detalleVenta($id){
        $actividades = Actividades::where('id','=',$id)
                ->where('status',1)
                ->orderBy('id')->get();
        return $actividades;
    }
}
