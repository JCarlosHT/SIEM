<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Custom;
use App\Models\User;
use App\Models\Admin;
use Carbon\Carbon;
use App\Models\cat_municipio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){ 
        $municipios = cat_municipio::all()->pluck('municipio','id');

        //Obtener el número de semana
        // $date = new Carbon("2023-01-01");
        // $now = $date->endOfWeek(Carbon::SATURDAY);
        // $now->setISODate(2023,4);
        // return($now->startOfWeek());

       return view('home',compact('municipios'));
    }
    
}
