<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\OrderShipped;
use App\Mail\Message;
use App\Mail\Welcome;

use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{

    public function formulario(){ 
        return view('Correo.form_mail');
    }
    public function enviar(Request $request){
        $pathToFile="";
        $containfile=false;
        $destinatario=$request->input('destinatario');
        $asunto=$request->input('asunto');
        $contenido=$request->input('contenido');
        $data=array('contenido'=>$contenido);
        $r=Mail::send('Correo.Plantilla_correo',$data,function($message)
            use ($asunto,$destinatario,$containfile,$pathToFile){
                $message->from('cchimalz@toluca.tecnm.mx','Carolina');
                $message->to($destinatario)->subject($asunto);
            });
         if(!$r){
            return view('Correo.Plantilla_mensaje')
                        ->with('msj','Correo enviado Correctamente');
        }else{
            return view('Correo.Plantilla_mensaje')
                        ->with('msj','Error al enviar el mensaje');
        }
      
    }
}
