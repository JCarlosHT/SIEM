<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\cat_secion;

class UserController extends Controller
{
    public function index(){
        $users= User::all();
       return view('usuarios.index',compact('users'));        
    }

    public function create(){
       return view('usuarios.create');     
    }
    public function save(Request $request){
        $user_rep = User::where('username',$request->username)->get();
        if(count($user_rep)==0){
        $user = new User();
        $user->username = $request->username;
        $user->nombre = $request->nombre;
        $user->apepa = $request->pri_ape;
        $user->apema = $request->seg_ape;
        $user->tipo_usuario = $request->tipo_usu;
        $user->save();

        $secion = new cat_secion();
        $secion->id_usuario = $user->id;
        $secciones = '';
        if(isset($request->dengue)){
            $secciones ='1';
        }
        if(isset($request->influenza)){
            if($secciones!=''){
                $secciones =',2';
            }else{
                $secciones ='2';
            }
        }
        if(isset($request->iras)){
            if($secciones!=''){
                $secciones.=',3';
            }else{
                $secciones = '3';
            }
        }
        if(isset($request->edas)){
            if($secciones!=''){
                $secciones.=',4';
            }else{
                $secciones = '4';
            }
        }
        if(isset($request->hep_a)){
            if($secciones!=''){
                $secciones.=',5';
            }else{
                $secciones = '5';
            }
        }
        if(isset($request->hep_b)){
            if($secciones!=''){
                $secciones.=',6';
            }else{
                $secciones = '6';
            }
        }
        if(isset($request->alacran)){
            if($secciones!=''){
                $secciones.=',7';
            }else{
                $secciones = '7';
            }
        }
        if(isset($request->Chin)){
            if($secciones!=''){
                $secciones.=',8';
            }else{
                $secciones = '8';
            }
        }
        if(isset($request->zika)){
            if($secciones!=''){
                $secciones.=',9';
            }else{
                $secciones = '9';
            }
        }
        if(isset($request->vir_sis)){
            if($secciones!=''){
                $secciones.=',10';
            }else{
                $secciones = '10';
            }
        }
        $secion->id_seccion = $secciones;
        $secion->id_registra =Auth::user()->id;
        $secion->save();
        }else{
             return redirect()->back()->with('success', 'your message,here');   

        }
    }
    public function actualizar(User $usuario){
        return view('usuarios.actualizar',compact('usuario'));
    }
}
