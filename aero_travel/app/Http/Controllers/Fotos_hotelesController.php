<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fotos_hoteles;
use App\Models\hoteles;

use Illuminate\Support\Facades\Validator;
use Storage;
class Fotos_hotelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoteles = Hoteles::where('status',1)
                ->orderBy('id')->get(); 
        $fotos_hoteles=Fotos_hoteles::where('status',1)
                        ->orderBy('id_hotel')->get();
        return view('Fotos_hoteles.index')->with('fotos_hoteles',
            $fotos_hoteles)->with('hoteles',$hoteles);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $hoteles = hoteles::where('status',1)
                ->orderBy('id')->get(); 
        return view('Fotos_hoteles.create')
        ->with('hoteles',$hoteles);
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
        $rutaarchivos='../storage/fotos_hoteles/';
        $hora=date('h-i-s');
        $fecha=date('d-m-y');
        $prefijo=$fecha."_".$hora;
        $archivo=$request->file('ruta');
        $nom=$archivo->getClientOriginalName();
        $input=array('file'=>$archivo);
        $reglas=array('file'=>'
            required|mimes:jpeg,png,gif,jpg|max:50000');
        $validacion=Validator::make($input,$reglas);
        if ($validacion->fails()) {
            $ruta=$prefijo."_".$nom;
            return view('correo.plantilla_mensaje')
            ->with('msj','El archivo no se pudo guardar'.$ruta);
        }else{
            $ruta=$prefijo."_".$archivo->getClientOriginalName();
            $r1=Storage::disk('fotos_hoteles')->put($ruta,\File::get($archivo));
            if ($r1) {
                $datos['ruta']=$ruta;
                Fotos_hoteles::create($datos);
        return redirect('/fotos_hoteles');
            }else{
                return view('correo.plantilla_mensaje')
                ->with('msj','El archivo no se guardó');
            }
        }     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                  $fotos_hoteles=Fotos_hoteles::find($id);
       $hoteles = hoteles::where('status',1)
                ->orderBy('id')->get(); 
        return view('Fotos_hoteles.read')->with('fotos_hoteles',$fotos_hoteles)
        ->with('hoteles',$hoteles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
              $fotos_hoteles=Fotos_hoteles::find($id);
       $hoteles = hoteles::where('status',1)
                ->orderBy('id')->get(); 
        return view('Fotos_hoteles.edit')->with('fotos_hoteles',$fotos_hoteles)
        ->with('hoteles',$hoteles);
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
        $rutaarchivos='../storage/fotos_hoteles/';
        $hora=date('h-i-s');
        $fecha=date('d-m-y');
        $prefijo=$fecha."_".$hora;
        $archivo=$request->file('ruta');
        $nom=$archivo->getClientOriginalName();
        $input=array('file'=>$archivo);
        $reglas=array('file'=>'
            required|mimes:jpeg,png,gif,jpg|max:50000');
        $validacion=Validator::make($input,$reglas);
        if ($validacion->fails()) {
            $ruta=$prefijo."_".$nom;
            return view('correo.plantilla_mensaje')
            ->with('msj','El archivo no se pudo guardar'.$ruta);
        }else{
            $ruta=$prefijo."_".$archivo->getClientOriginalName();
            $r1=Storage::disk('fotos_hoteles')->put($ruta,\File::get($archivo));
            if ($r1) {
                $datos['ruta']=$ruta;
                $fotos_hoteles=Fotos_hoteles::find($id);
                       $fotos_hoteles->update($datos);
        return redirect('/fotos_hoteles');
            }else{
                return view('correo.plantilla_mensaje')
                ->with('msj','El archivo no se guardó');
            }
        }    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $fotos_hoteles=Fotos_hoteles::find($id);
      $fotos_hoteles->status=0;
      $fotos_hoteles->save();
     return redirect('/fotos_hoteles');
    }
}
