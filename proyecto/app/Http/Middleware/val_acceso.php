<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class val_acceso
{

    public function handle(Request $request, Closure $next)
    {

        $ruta=$request->route()->getName();
           if(Auth::user()==null){
            return redirect()->route('login');
            return $next($request); 

           }else{
            if(!empty($request->user()->cat_accesos)){

                if(!empty($request->user()->cat_accesos->where('tipo_usuarios_id','like','%'.$request->user()->tipo_usuario.'%')->where('name',$request->route()->getName())->get()->toarray())){
                    return $next($request);
                }else
                {
                    return abort(403,"No tienes autorización para ingresar al directorio");  
                }         
            }
            else
            {
               return abort(403,"No tienes autorización para ingresar al directorio");  
            }
        }

    }
}
