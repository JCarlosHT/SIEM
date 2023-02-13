<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chinkungunya;
use Illuminate\Support\Facades\Auth;
use App\Models\cat_municipio;

class ChinkungunyaController extends Controller
{
    public function chinkungunya(Request $request){
        $chi = new chinkungunya();
        $chi->semana = $request->sem;
        $chi->anio = $request->anio;
        $chi->casos = $request->casos;
        if (isset($request->mun)) {
            $chi->mun =  implode(',', $request->mun);
        }
        $chi->id_user = Auth::User()->id;
        $chi->save();
        return '1';
    }
    public function validar(Request $request){
        $val = chinkungunya::where('semana',$request->semana)->get();
        $resultado = sizeof($val)>0 ? '1' : '0';
        return $resultado;
    }
    public function actualizar(chinkungunya $chinkungunya){
        $municipios = cat_municipio::all()->pluck('municipio','id');
        $mun_array = chinkungunya::where('id',$chinkungunya->id)->pluck('mun');
        $mun_array = explode(',', $mun_array);
        $mun_array = str_replace(array('[','"',']'), '', $mun_array);
        return view('chinkungunya.actualizar',compact('chinkungunya','mun_array','municipios'));
    }
    public function update(Request $request,chinkungunya $chinkungunya){
        try{
        $chinkungunya->semana = $request->sem;
        $chinkungunya->anio = $request->anio;
        $chinkungunya->casos = $request->casos;
        if (isset($request->mun)) {
            $chinkungunya->mun =  implode(',', $request->mun);
        }
        $chinkungunya->update();
        return back()->with('ok', 'ok');
        }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
        }
    }
}
