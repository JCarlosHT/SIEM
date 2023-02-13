<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zika;
use Illuminate\Support\Facades\Auth;
use App\Models\cat_municipio;

class ZikaController extends Controller{
    public function zika(Request $request){
        $zika = new zika();
        $zika->semana = $request->sem;
        $zika->anio = $request->anio;
        $zika->casos = $request->casos;
        $zika->casos_nac = $request->casos_nac;
        $zika->casos_emb = $request->casos_emb;
        $zika->casos_emb_nac = $request->casos_emb_nac;
        if (isset($request->mun)) {
            $zika->mun =  implode(',', $request->mun);
        }
        $zika->id_user = Auth::User()->id;
        $zika->save();
        return '1';
    }
    public function validar(Request $request){
        $val = zika::where('semana',$request->semana)->get();
        $resultado = sizeof($val)>0 ? '1' : '0';
        return $resultado;
    }
    public function actualizar(zika $zika){
        $municipios = cat_municipio::all()->pluck('municipio','id');
        $mun_array = zika::where('id',$zika->id)->pluck('mun');
        $mun_array = explode(',', $mun_array);
        $mun_array = str_replace(array('[','"',']'), '', $mun_array);
        return view('zika.actualizar',compact('zika','mun_array','municipios'));
    }
    public function update(Request $request,zika $zika){
        try{
        $zika->semana = $request->sem;
        $zika->anio = $request->anio;
        $zika->casos = $request->casos;
        $zika->casos_nac = $request->casos_nac;
        $zika->casos_emb = $request->casos_emb;
        $zika->casos_emb_nac = $request->casos_emb_nac;
        if(isset($request->mun)){
            $zika->mun =implode(',', $request->mun);
        }
        $zika->update();
        return back()->with('ok', 'ok');
        }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
        } 
    }
}
