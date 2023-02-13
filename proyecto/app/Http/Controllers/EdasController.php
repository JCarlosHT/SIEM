<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\edas;
use Illuminate\Support\Facades\Auth;
use App\Models\cat_municipio;

class EdasController extends Controller
{
    public function edas(Request $request){
        $edas = new edas();
        $edas->semana = $request->sem;
        $edas->anio = $request->anio;
        $edas->casos = $request->casos_edas;
        if (isset($request->mun_edas)) {
            $edas->mun =  implode(',', $request->mun_edas);
        }
        $edas->casos_men5 = $request->casos_edas5;
        if (isset($request->mun_edas5)) {
            $edas->mun_men5 =  implode(',', $request->mun_edas5);
        }
        $edas->id_user = Auth::User()->id;
        $edas->save();
        return '1';
    }
    public function validar(Request $request){
        $val = edas::where('semana',$request->semana)->get();
        $resultado = sizeof($val)>0 ? '1' : '0';
        return $resultado;
    }
    public function actualizar(edas $edas){
        $municipios = cat_municipio::all()->pluck('municipio','id');
        $mun_array = edas::where('id',$edas->id)->pluck('mun');
        $mun_array = explode(',', $mun_array);
        $mun_array = str_replace(array('[','"',']'), '', $mun_array);

        $mun_array5 = edas::where('id',$edas->id)->pluck('mun_men5');
        $mun_array5 = explode(',', $mun_array5);
        $mun_array5 = str_replace(array('[','"',']'), '', $mun_array5);
        return view('edas.actualizar',compact('edas','mun_array5','mun_array','municipios'));
    }
    public function update(Request $request, edas $edas){
        try {
            $edas->semana = $request->sem;
            $edas->anio = $request->anio;
            $edas->casos = $request->casos;
            if(isset($request->mun_edas)){
                $edas->mun =implode(',', $request->mun_edas);
            } 
            $edas->casos_men5 = $request->casos5;
            if(isset($request->mun_edas5)){
                $edas->mun_men5 =implode(',', $request->mun_edas5);
            }     
            $edas->update();
            return back()->with('ok', 'ok');
        }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
        }
    }
}
