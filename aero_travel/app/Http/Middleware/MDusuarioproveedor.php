<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MDusuarioproveedor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         $usuario_actual=\Auth::user();
        if(isset($usuario_actual)){
            if($usuario_actual->tipoUusario!=1){
                return redirect('sin_acceso');
            }
        }else{
            return redirect('login');
        }
        return $next($request);
    }
}
