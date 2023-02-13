<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\viruela;
use Illuminate\Support\Facades\Auth;
use App\Models\cat_municipio;

class ViruelaController extends Controller{
    public function viruela(Request $request){
        $viruela = new viruela();
        $viruela->semana = $request->sem;
        $viruela->anio = $request->anio;
        $viruela->casos = $request->casos;
        $viruela->casos_est = $request->casos_vir_est;
        $viruela->casos_des = $request->casos_vir_des;
        $viruela->casos_pro = $request->casos_vir_pro;
        if (isset($request->mun)) {
            $viruela->mun =  implode(',', $request->mun);
        }
        $viruela->id_user = Auth::User()->id;
        $viruela->save();
        return '1';
    }
    public function validar(Request $request){
        $val = viruela::where('semana',$request->semana)->get();
        $resultado = sizeof($val)>0 ? '1' : '0';
        return $resultado;
    }
    public function actualizar(Request $request, viruela $viruela){
        $municipios = cat_municipio::all()->pluck('municipio','id');
        $mun_array = viruela::where('id',$viruela->id)->pluck('mun');
        $mun_array = explode(',', $mun_array);
        $mun_array = str_replace(array('[','"',']'), '', $mun_array);
        return view('viruela.actualizar',compact('viruela','mun_array','municipios'));
    }
    public function update(Request $request, viruela $viruela){
        try{
        $viruela->semana = $request->sem;
        $viruela->anio = $request->anio;
        $viruela->casos = $request->casos;
        $viruela->casos_est = $request->casos_est;
        $viruela->casos_des = $request->casos_des;
        $viruela->casos_pro = $request->casos_pro;
        if(isset($request->mun)){
            $viruela->mun =implode(',', $request->mun);
        }
        $viruela->update();
        return back()->with('ok', 'ok');
        }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
        }
    }
}
