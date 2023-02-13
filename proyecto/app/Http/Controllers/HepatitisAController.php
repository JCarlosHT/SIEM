<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hepatitis_a;
use Illuminate\Support\Facades\Auth;
use App\Models\cat_municipio;

class HepatitisAController extends Controller
{
    public function hepatitisa(Request $request){
        $hep = new hepatitis_a();
        $hep->semana = $request->sem;
        $hep->anio = $request->anio;
        $hep->casos = $request->casos;
        $hep->def = $request->def;
        if (isset($request->mun)) {
            $hep->mun =  implode(',', $request->mun);
        }
        $hep->id_user = Auth::User()->id;
        $hep->save();
        return '1';
    }
    public function validar(Request $request){
        $val = hepatitis_a::where('semana',$request->semana)->get();
        $resultado = sizeof($val)>0 ? '1' : '0';
        return $resultado;
    }
    public function actualizar(hepatitis_a $hepatitis){
        $municipios = cat_municipio::all()->pluck('municipio','id');
        $mun_array = hepatitis_a::where('id',$hepatitis->id)->pluck('mun');
        $mun_array = explode(',', $mun_array);
        $mun_array = str_replace(array('[','"',']'), '', $mun_array);
        return view('hep.actualizar',compact('hepatitis','mun_array','municipios'));
    }
    public function update(Request $request, hepatitis_a $hepatitis){
        try{
        $hepatitis->semana = $request->sem;
        $hepatitis->anio = $request->anio;
        $hepatitis->casos = $request->casos;
        $hepatitis->def = $request->def;
        if(isset($request->mun_hep)){
           $hepatitis->mun =implode(',', $request->mun_hep);
        }  
        $hepatitis->update();
        return back()->with('ok', 'ok');
        }catch(\Exception $e){
            return $e;
        }     
    }
}
