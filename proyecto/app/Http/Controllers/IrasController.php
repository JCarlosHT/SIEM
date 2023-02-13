<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\iras;
use Illuminate\Support\Facades\Auth;
use App\Models\cat_municipio;

class IrasController extends Controller{
    public function iras(Request $request){
        $iras = new iras();
        $iras->semana = $request->sem;
        $iras->anio = $request->anio;
        $iras->casos = $request->casos_iras;
        if (isset($request->mun_iras)) {
            $iras->mun = implode(',',$request->mun_iras);
        }
        $iras->casos_men5 = $request->casos_iras5;
        if(isset($request->mun_iras5)){
            $iras->mun_men5 = implode(',',$request->mun_iras5);
        }
        $iras->id_user = Auth::user()->id;
        $iras->save();
        return '1';
    }
    public function validar(Request $request){
        $val = iras::where('semana',$request->semana)->get();
        $resultado = sizeof($val)>0 ? '1' : '0';
        return $resultado;
    }
    public function actualizar(iras $ira){
        $municipios = cat_municipio::all()->pluck('municipio','id');
        $mun_array = iras::where('id',$ira->id)->pluck('mun');
        $mun_array = explode(',', $mun_array);
        $mun_array = str_replace(array('[','"',']'), '', $mun_array);

        $mun_array5 = iras::where('id',$ira->id)->pluck('mun_men5');
        $mun_array5 = explode(',', $mun_array5);
        $mun_array5 = str_replace(array('[','"',']'), '', $mun_array5);
        return view('iras.actualizar',compact('ira','mun_array','mun_array5','municipios'));
    }
    public function update(Request $request, iras $ira){
        try {
            $ira->semana = $request->sem;
            $ira->anio = $request->anio;
            $ira->casos = $request->casos;
            if(isset($request->mun_iras)){
                $ira->mun =implode(',', $request->mun_iras);
            } 
            $ira->casos_men5 = $request->casos5;
            if(isset($request->mun_iras5)){
                $ira->mun_men5 =implode(',', $request->mun_iras5);
            }     
            $ira->update();
            return back()->with('ok', 'ok');
        }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
        }
            
    }
}
