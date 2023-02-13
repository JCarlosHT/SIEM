<?php

namespace App\Http\Controllers;
use App\Models\esavi;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class EsaviController extends Controller
{
    public function esavi(Request $request){
        $esavi = new esavi();
        $esavi->semana = $request->sem;
        $esavi->anio = $request->anio;
        $esavi->casos_cov = $request->esa_cov;
        $esavi->casos_nocov = $request->esa_nocov;
        $esavi->id_user = Auth::User()->id;
        $esavi->save();

        return '1';
    }
    public function validar(Request $request){
        $val = esavi::where('semana',$request->semana)->get();
        $resultado = sizeof($val)>0 ? '1' : '0';
        return $resultado;
    }
    public function actualizar(esavi $esavi){
        return view('esavi.actualizar',compact('esavi'));
    }
    public function update(Request $request,esavi $esavi){
        try{
        $esavi->semana = $request->sem;
        $esavi->anio = $request->anio;
        $esavi->casos_cov = $request->casos_cov;
        $esavi->casos_nocov = $request->casos_nocov;
        $esavi->update();
        return back()->with('ok', 'ok');
        }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
        }
    }
}
