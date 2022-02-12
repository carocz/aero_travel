<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\usuarios;
use App\Models\fotos_hoteles;
use App\Models\vuelos;
class PDFController extends Controller
{
    public function genera_pdf(){
        return view('pdf.listado_reportes');

    }

    public  function crearPDF($datos,$vistaUrl,$tipo){
        $data=$datos;
        $date=date('Y-m-d');
        $view=\View::make($vistaUrl,compact('data','date'))->render(); 
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf');}
    }
    public function crear_reporte_nombre($tipo){
        $vistaurl= "pdf.reporte_clientes";
        $usuarios=Usuarios::where('id_tipo_usuario',3)
        ->where('status',1)->get();
        return $this->CrearPDF($usuarios,$vistaurl,$tipo);
    }
    public function crear_reporte_id($tipo){
           $vistaurl= "pdf.reporte_hoteles";
        $fotos_hoteles=Fotos_hoteles::orderBy('id')->get();
        return $this->CrearPDF($fotos_hoteles,$vistaurl,$tipo);
    }
     public function crear_reporte_vuelos($tipo){
           $vistaurl= "pdf.reporte_vuelos";
        $vuelos=Vuelos::orderBy('id')->get();
        return $this->CrearPDF($vuelos,$vistaurl,$tipo);
    }
}
