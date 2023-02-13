<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alacranismo;
use Illuminate\Support\Facades\Auth;
use App\Models\cat_municipio;

class AlacranismoController extends Controller{
    public function alacran(Request $request){
        $alacran = new alacranismo();
        $alacran->semana = $request->sem;
        $alacran->anio = $request->anio;
        $alacran->casos = $request->casos;
        $alacran->dosis = $request->dosis;
        if (isset($request->mun)) {
            $hep->mun =  implode(',', $request->mun);
        }
        $alacran->def = $request->def;
        $alacran->id_user = Auth::User()->id;
        $alacran->save();
        return '1';
    }
    public function validar(Request $request){
        $val = alacranismo::where('semana',$request->semana)->get();
        $resultado = sizeof($val)>0 ? '1' : '0';
        return $resultado;
    }
    public function actualizar(alacranismo $alacran){
        $municipios = cat_municipio::all()->pluck('municipio','id');
        $mun_array = alacranismo::where('id',$alacran->id)->pluck('mun');
        $mun_array = explode(',', $mun_array);
        $mun_array = str_replace(array('[','"',']'), '', $mun_array);
        return view('alacranismo.actualizar',compact('alacran','mun_array','municipios'));
    }
    public function update(Request $request,alacranismo $alacran){
        try {
            $alacran->semana = $request->sem;
        $alacran->anio = $request->anio;
        $alacran->casos = $request->casos;
        if(isset($request->mun_ala)){
            $alacran->mun =implode(',', $request->mun_ala);
        }
        $alacran->def = $request->def;
        $alacran->dosis = $request->dosis;
        $alacran->update();
        return back()->with('ok', 'ok');
        }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
        }
        
    }
}
