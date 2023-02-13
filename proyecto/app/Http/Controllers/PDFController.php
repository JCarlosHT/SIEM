<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class PDFController extends Controller
{
    public function registro()
    {
        $hoy = Carbon::now();
        setlocale(LC_ALL, 'es_ES');
        $fecha = Carbon::parse($hoy);
        $path = 'image/pdf/portada.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path2 = 'image/pdf/secretaria.jpg';
        $type2 = pathinfo($path2, PATHINFO_EXTENSION);
        $data2 = file_get_contents($path2);
        $logo2 = 'data:image/' . $type2 . ';base64,' . base64_encode($data2);

        $path3 = 'image/pdf/icon_injection_white.png';
        $type3 = pathinfo($path3, PATHINFO_EXTENSION);
        $data3 = file_get_contents($path3);
        $injection = 'data:image/' . $type3 . ';base64,' . base64_encode($data3);

        $path4 = 'image/pdf/icon_infection_white.png';
        $type4 = pathinfo($path4, PATHINFO_EXTENSION);
        $data4 = file_get_contents($path4);
        $infection = 'data:image/' . $type4 . ';base64,' . base64_encode($data4);

        $path5 = 'image/pdf/icon_liver_white.png';
        $type5 = pathinfo($path5, PATHINFO_EXTENSION);
        $data5 = file_get_contents($path5);
        $liver = 'data:image/' . $type5 . ';base64,' . base64_encode($data5);

        $path6 = 'image/pdf/icon_colon_white.png';
        $type6 = pathinfo($path6, PATHINFO_EXTENSION);
        $data6 = file_get_contents($path6);
        $colon = 'data:image/' . $type6 . ';base64,' . base64_encode($data6);

        $path7 = 'image/pdf/icon_mosquito_white.png';
        $type7 = pathinfo($path7, PATHINFO_EXTENSION);
        $data7 = file_get_contents($path7);
        $mosquito = 'data:image/' . $type7 . ';base64,' . base64_encode($data7);

        $path8 = 'image/pdf/icon_scorpio_white.png';
        $type8 = pathinfo($path8, PATHINFO_EXTENSION);
        $data8 = file_get_contents($path8);
        $scorpio = 'data:image/' . $type8 . ';base64,' . base64_encode($data8);

        $path9 = 'image/pdf/icon_lungs_white.png';
        $type9 = pathinfo($path9, PATHINFO_EXTENSION);
        $data9 = file_get_contents($path9);
        $lungs = 'data:image/' . $type9 . ';base64,' . base64_encode($data9);

        $pdf = PDF::loadView('pdf', compact('logo' ,'fecha', 'logo2', 'injection', 'infection', 'liver', 'colon', 'mosquito', 'scorpio', 'lungs'))->setPaper('a4', 'landscape');;
        
        return $pdf->stream('SSM-SALUD.pdf');
    }
}
