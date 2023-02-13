<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\influenza;
use Illuminate\Support\Facades\Auth;
use App\Models\cat_municipio;

class InfluenzaController extends Controller
{
    public function influenza(Request $request){
        $influenza = new influenza();
        $influenza->semana = $request->sem;
        $influenza->anio = $request->anio;
        $influenza->casos_inf = $request->casos_inf;
        $influenza->ah1 = $request->ah1;
        $influenza->ah3 = $request->ah3;
        $influenza->infb = $request->infb;
        $influenza->def_inf = $request->def_inf;
        if (isset($request->mun_inf)) {
            $influenza->mun =  implode(',',$request->mun_inf);
        }
        $influenza->id_user = Auth::User()->id;
        $influenza->save();
        return '1';
    }
    public function validar(Request $request){
        $val = influenza::where('semana',$request->semana)->get();
        $resultado = sizeof($val)>0 ? '1' : '0';
        return $resultado;
    }
    public function actualizar(influenza $influenza){
        $municipios = cat_municipio::all()->pluck('municipio','id');
        $mun_array = influenza::where('id',$influenza->id)->pluck('mun');
        $mun_array = explode(',', $mun_array);
        $mun_array = str_replace(array('[','"',']'), '', $mun_array);
        return view('influenza.actualizar',compact('influenza','municipios','mun_array'));
    }
    public function update(Request $request, influenza $influenza){
        try{
        $influenza->semana = $request->sem;
        $influenza->anio = $request->anio;
        $influenza->casos_inf = $request->casos;
        $influenza->ah1 = $request->ah1;
        $influenza->ah3 = $request->ah3;
        $influenza->infb = $request->infb;
        $influenza->def_inf = $request->def;
        if(isset($request->mun_inf)){
        $influenza->mun =implode(',', $request->mun_inf);
        }
        $influenza->id_user = Auth::user()->id;
        $influenza->update();
        return back()->with('ok', 'ok');
        }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
         }
    }
}
