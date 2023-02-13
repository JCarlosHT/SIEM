<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hepatitisAguda;
use Illuminate\Support\Facades\Auth;
use App\Models\cat_municipio;

class HepatitisAgudaController extends Controller
{
    public function hepatitis(Request $request){
        $hep = new hepatitisAguda();
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
        $val = hepatitisAguda::where('semana',$request->semana)->get();
        $resultado = sizeof($val)>0 ? '1' : '0';
        return $resultado;
    }
    public function actualizar(hepatitisAguda $hepatitis){
        $municipios = cat_municipio::all()->pluck('municipio','id');
        $mun_array = hepatitisAguda::where('id',$hepatitis->id)->pluck('mun');
        $mun_array = explode(',', $mun_array);
        $mun_array = str_replace(array('[','"',']'), '', $mun_array);
        return view('hepa.actualizar',compact('hepatitis','mun_array','municipios'));
    }
    public function update(Request $request, hepatitisAguda $hepatitis){
        try{
        $hepatitis->semana = $request->sem;
        $hepatitis->anio = $request->anio;
        $hepatitis->casos = $request->casos;
        if(isset($request->mun_hep)){
            $hepatitis->mun =implode(',', $request->mun_hep);
        }
        $hepatitis->Def= $request->def;
        $hepatitis->update();
        return back()->with('ok', 'ok');
        }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
        }
    }
}
