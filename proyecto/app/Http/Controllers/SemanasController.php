<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dengue;
use App\Models\influenza;
use App\Models\iras;
use App\Models\edas;
use App\Models\hepatitis_a;
use App\Models\hepatitisAguda;
use App\Models\alacranismo;
use App\Models\chinkungunya;
use App\Models\zika;
use App\Models\viruela;
use App\Models\esavi;

class SemanasController extends Controller{
    public function dengue(){
        $dengue = dengue::Where('iactivo',1)->orderBy('semana','DESC')->orderBy('anio','DESC')->get();
        return view('historial.dengue',compact('dengue'));
    }
    public function influenza(){
        $influenza = influenza::Where('iactivo',1)->orderBy('semana','DESC')->orderBy('anio','DESC')->get();
        return view('historial.influenza',compact('influenza'));
    }
    public function iras(){
        $iras = iras::Where('iactivo',1)->orderBy('semana','DESC')->orderBy('anio','DESC')->get();
        return view('historial.iras',compact('iras'));
    }
    public function edas(){
        $edas= edas::Where('iactivo',1)->orderBy('semana','DESC')->orderBy('anio','DESC')->get();
        return view('historial.edas',compact('edas'));
    }
    public function hepatitis(){
        $hepatitis = hepatitis_a::Where('iactivo',1)->orderBy('semana','DESC')->orderBy('anio','DESC')->get();
        return view('historial.hepatitis',compact('hepatitis'));
    }
    public function hepatitisaguda(){
        $hepa = hepatitisAguda::Where('iactivo',1)->orderBy('semana','DESC')->orderBy('anio','DESC')->get();
        return view('historial.hepa',compact('hepa'));
    }
    public function alacranismo(){
        $alacranes = alacranismo::Where('iactivo',1)->orderBy('semana','DESC')->orderBy('anio','DESC')->get();
        return view ('historial.alacranismo',compact('alacranes'));
    }
    public function chinkungunya(){
        $chinkungunya = chinkungunya::Where('iactivo',1)->orderBy('semana','DESC')->orderBy('anio','DESC')->get();
        return view ('historial.chinkungunya',compact('chinkungunya'));
    }
    public function zika (){
        $zika = zika::Where('iactivo',1)->orderBy('semana','DESC')->orderBy('anio','DESC')->get();
        return view ('historial.zika',compact('zika'));
    }
    public function viruela(){
        $viruela = viruela::Where('iactivo',1)->orderBy('semana','DESC')->orderBy('anio','DESC')->get();
        return view ('historial.viruela',compact('viruela'));
    }
    public function esavi(){
        $esavi = esavi::Where('iactivo',1)->orderBy('semana','DESC')->orderBy('anio','DESC')->get();
        return view ('historial.esavi',compact('esavi'));
    }
}
