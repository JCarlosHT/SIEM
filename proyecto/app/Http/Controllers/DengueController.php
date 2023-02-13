<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dengue;
use App\Models\cat_municipio;
use Illuminate\Support\Facades\Auth;

class DengueController extends Controller
{
    public function dengue(Request $request){
        $dengue = new dengue();
        $dengue->semana = $request->sem;
        $dengue->anio = $request->anio;
        $dengue->cas_conf = $request->tot_cof_den;
        $dengue->den_ng = $request->den_nograv;
        $dengue->den_sa = $request->den_aler;
        $dengue->den_grav = $request->den_grav;
        $dengue->def = $request->den_def;
        if(isset($request->mun)){
        $dengue->mun =implode(',', $request->mun_den);
        }
        $dengue->id_user = Auth::user()->id;
        $dengue->save();
        return '1';
    }
    public function validar(Request $request){
        $val = dengue::where('semana',$request->semana)->where('anio',$request->anio)->get();
        $resultado = sizeof($val)>0 ? '1' : '0';
        return $resultado;
    }
    public function actualizar(dengue $Dengue){
        $municipios = cat_municipio::all()->pluck('municipio','id');
        $mun_array = dengue::where('id',$Dengue->id)->pluck('mun');
        $mun_array = explode(',', $mun_array);
        $mun_array = str_replace(array('[','"',']'), '', $mun_array);
        return view('dengue.actualizar',compact('Dengue','municipios','mun_array'));
    }
    public function update(Request $request, dengue $dengue){
        try{
        $dengue->semana = $request->sem;
        $dengue->anio = $request->anio;
        $dengue->cas_conf = $request->casos;
        $dengue->den_ng = $request->ng;
        $dengue->den_sa = $request->den_aler;
        $dengue->den_grav = $request->den_grav;
        $dengue->def = $request->den_def;
        if(isset($request->mun_den)){
        $dengue->mun =implode(',', $request->mun_den);
        }
        $dengue->id_user = Auth::user()->id;
        $dengue->update();
        return back()->with('ok', 'ok');
        }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
        }
    }
}
