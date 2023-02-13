<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Tríptico</title>
    <style>
        /* Estilos de etiqueta*/
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

        @page{
            margin: 0px 0px 0px 0px!important;
        }

        * {
            font-family: "Poppins", sans-serif;
        }

        body {
            color: #3a3a3d;
            padding: .1rem;
        }

        table {
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        td {
            width: 33.33%;
            padding: 0px 10px 0px 10px;
            font-size: 8pt;
        }

        .border {
            border: 0.1px solid #666;
        }

        .border-left {
            border-left: 0.1px solid #666;
            padding-left: 10px;
        }

        .padding-left {
            padding-left: 15px;
        }

        .h-10 {
            height: 8px !important;
        }

        .h-20 {
            height: 25px !important;
        }
        
        .h-20-min {
            height: 23px !important;
        }

        .h-50 {
            height: 50px;
        }

        .center {
            text-align: center;
        }

        .mini {
            font-size: 7.3pt;
            font-weight: normal;
        }

        .small {
            font-size: 8.5pt;
            font-weight: normal;
        }

        .normal{
            font-size: 9pt;
            text-align: center;
        }

        .title {
            font-size: 14pt;
            font-weight: bold;
            text-align: center;
        }

        .title-2 {
            font-size: 8.5pt;
            font-weight: bold;
            text-align: center;
            color: #333;
        }

        .card{
            padding: 5px 4px 5px 4px;
            color: white;
            font-size: 9.5pt;
            display: block;
            font-weight: bold;
            text-align: center;
            margin-bottom: 2px;
            border-radius: 5px;
        }

        .purple{
            color: #6A3E8C;
        }

        .color-dengue{
            background-color: #7C52BA;
        }

        .color-influ{
            background-color:  #370A68;
        }

        .color-chik{
            background-color: #441281;
        }

        .color-zika{
            background-color: #5A388C;
        }
        .color-iras{
            background-color:  #57169E;
        }

        .color-edas{
            background-color: #A3007F;
        }

        .color-hepa{
            background-color: #6C1290;
        }

        .color-alac{
            background-color: #7A0669;
        }

        .color-viru{
            background-color: #7127C3;
        }

        .color-esav{
            background-color: #B94294;
        }

        .space{
            display: block;
            height: 28px;
        }

        .hr{
            border: none;
            border-top: 3px solid #57169E;
            display: block;
            border-radius: 2px;
        }

        .hr-1 {
            border: 0;
            border-top: 3px solid  #7A0669;
            display: block;
            border-radius: 2px;
        }

        .img-left{
            position: absolute;
            width: 22px;
        }
              

    </style>
</head>

<body>
    <table>
        <tbody>
            <tr class="center">
                <td class="padding-left">
                    <img src="{{ $mosquito }}" class="img-left" style="top: 26px; left: 26px; width:20px;">
                    <span class="card color-dengue">DENGUE</span>
                    <span class="title-2">SEMANA EPIDEMIOLÓGICA 01<br></span>
                    <span class="small">01 de enero al 07 de enero de 2023</span>

                        <table class="normal">
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td class="border h-20"></td>
                                <td class="border h-20">Casos acumulados 2022</td>
                                <td class="border h-20">Casos nuevos 2022</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Total casos confirmados</td>
                                <td class="border h-20">0</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Dengue no grave</td>
                                <td class="border h-20">0</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Dengue con signos de alarma</td>
                                <td class="border h-20">0</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Dengue grave</td>
                                <td class="border h-20">0</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Defunciones</td>
                                <td class="border h-20">0</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="3"></td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="3"></td>
                            </tr>
                        </table>
                        
                        <table class="normal">
                            <tr>
                                <td colspan="5">
                                    <span class="mini">Histórico casos de Dengue por año</span>
                                    <img src="https://quickchart.io/chart?c={type:'bar',data:{labels:['2018','2019','2020','2021','2022'], datasets:[{label:'Histórico casos de Dengue por año',data:[98,1420,626,592,606], backgroundColor: 'rgba(124, 82, 186, 0.4)', borderColor: 'rgba(124, 82, 186)'}]},options:{legend:{display:false},scales: {xAxes: [{ticks: {fontColor: 'rgba(38, 38, 38)', fontSize: 13}}], yAxes: [{ticks: {fontColor: 'rgba(38, 38, 38)', fontSize: 13}}]},plugins:{datalabels:{anchor: 'end',align: 'top', color: 'rgba(38, 38, 38)',font: {weight: 'normal', size: 13}}}}} 
                                    " height="190">
                                </td>
                            </tr>
                            {{--  <tr>
                                <td class="border h-20">2018</td>
                                <td class="border h-20">2019</td>
                                <td class="border h-20">2020</td>
                                <td class="border h-20">2021</td>
                                <td class="border h-20">2022</td>
                            </tr>
                            <tr>
                                <td class="border h-20">98</td>
                                <td class="border h-20">1420</td>
                                <td class="border h-20">626</td>
                                <td class="border h-20">592</td>
                                <td class="border h-20">606</td>
                            </tr>  
                            <tr>
                                <td class="h-10" colspan="5"></td>
                            </tr> --}}
                            <tr>
                                <td colspan="5"><span class="mini">Incidencia en municipios:</span></td>
                            </tr>
                            <tr>
                                <td colspan="5"><span class="title-2 purple">CIERRE PRELIMINAR 2022</span></td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="border h-20">Casos confirmados</td>
                                <td colspan="2" class="border h-20">606</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="border h-20">Dengue no grave</td>
                                <td colspan="2" class="border h-20">260</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="border h-20">Dengue con signos de alarma</td>
                                <td colspan="2" class="border h-20">327</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="border h-20">Dengue grave</td>
                                <td colspan="2" class="border h-20">19</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="border h-20">Defunciones</td>
                                <td colspan="2" class="border h-20">5</td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="5"></td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="5"></td>
                            </tr>
                        </table>
                        <img src="{{ $mosquito }}" class="img-left" style="top: 637px; left: 26px; width:20px;">
                        <span class="card color-chik">CHIKUNGUNYA</span>
                        <span class="title-2">SEMANA EPIDEMIOLÓGICA 52<br></span>
                        <span class="small">25 de diciembre al 31 de diciembre de 2022</span>

                        <table class="normal">
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td class="border h-20">Casos confirmados 2022</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Cierre preliminar 2021</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                        </table>
                </td>

                <td class="border-left"><img src="{{ $mosquito }}" class="img-left" style="top: 30px; left: 400px; width:20px;">
                    <span class="card color-zika">ZIKA</span>
                    <span class="title-2">SEMANA EPIDEMIOLÓGICA 52<br></span>
                        <span class="small">25 de diciembre al 31 de diciembre de 2022</span>
                    <table class="normal">
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="border h-20">Casos confirmados</td>
                            <td class="border h-20">5</td>
                        </tr>
                        <tr>
                            <td class="border h-20">Embarazadas</td>
                            <td class="border h-20">0</td>
                        </tr>
                        <tr>
                            <td class="border h-20">Casos nuevos</td>
                            <td class="border h-20">0</td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="border h-20">Total de casos en México</td>
                            <td class="border h-20">12</td>
                        </tr>
                        <tr>
                            <td class="border h-20">Total embarazadas México</td>
                            <td class="border h-20">0</td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span class="mini">Incidencia en municipios:</span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span class="title-2 purple">CIERRE PRELIMINAR 2021</span></td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="border h-20">Casos confirmados</td>
                            <td class="border h-20">34</td>
                        </tr>
                        <tr>
                            <td class="border h-20">Embarazadas</td>
                            <td class="border h-20">13</td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="border h-20">Total de casos en México</td>
                            <td class="border h-20">35</td>
                        </tr>
                        <tr>
                            <td class="border h-20">Embarazadas</td>
                            <td class="border h-20">14</td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                    </table>

                    <img src="{{ $lungs }}" class="img-left" style="top: 392px; left: 400px;">
                    <span class="card color-influ">INFLUENZA</span>
                    <span class="title-2">SEMANA EPIDEMIOLÓGICA 02<br></span>
                    <span class="small">08 de enero al 14 de enero de 2023</span>
                        <span class="mini">(Corte 13/01/2023– 13:00 hrs)</span>
                        <table class="normal">
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span class="mini">Influenza (temporada estacional)</span>
                                    <img src="https://quickchart.io/chart?c={type:'bar',data:{labels:['Confirmados','AH1N1','AH3N2','Influenza B','AH3N2 Defun.'], datasets:[{label:'Influenza (temporada estacional)',data:[0,1,36,36,0], backgroundColor: 'rgba(55, 10, 104, 0.4)', borderColor: 'rgba(55, 10, 104)'}]},options:{legend:{display:false},scales: {xAxes: [{ticks: {fontColor: 'rgba(38, 38, 38)', fontSize: 13}}], yAxes: [{ticks: {fontColor: 'rgba(38, 38, 38)', fontSize: 13}}]},plugins:{datalabels:{anchor: 'end',align: 'top', color: 'rgba(38, 38, 38)',font: {weight: 'normal', size: 13}}}}} 
                                    " height="200">
                                </td>
                            </tr>
                            {{--  <tr>
                                <td class="border h-20">Casos confirmados</td>
                                <td class="border h-20"></td>
                            </tr>
                            <tr>
                                <td class="border h-20">AH1N1</td>
                                <td class="border h-20">1</td>
                            </tr>
                            <tr>
                                <td class="border h-20">AH3N2</td>
                                <td class="border h-20">36</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Influenza B</td>
                                <td class="border h-20">36</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Defunciones (AH3N2) </td>
                                <td class="border h-20">0</td>
                            </tr> --}}
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>  
                            <tr>
                                <td colspan="2">
                                    <span class="title-2 red">CIERRE TEMPORADA ESTACIONAL<br></span>
                                    <span class="small">Semana 40 de 2021 - Semana 20 de 2022</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border h-20">Total de casos AH3N2</td>
                                <td class="border h-20">36</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Defunciones AH3N2 </td>
                                <td class="border h-20">1</td>
                            </tr> 
                        </table>
                </td>

                <td class="title h-20 border-left">
                    <img src="{{ $logo2 }}" width="320"><br>

                    <span class="space title"></span>
                    <span class="title">Información Relevante en Salud</span>
                    <p class="normal">Coordinación de Comunicación Social</p>

                    <hr class="hr">
                    <span class="space"></span>
                    <img src="{{ $logo }}" width="330">
                    <span class="space"></span>

                    <hr class="hr-1">
                    <span class="title">SEMANA 52<br></span>
                    <span class="small">Del 25 de diciembre al 31 de diciembre de 2022</span>
                    <hr class="hr">
                </td>
            </tr>
        </tbody>
    </table>

    <table>
        <tbody>
            <tr class="center">

                <td class="padding-left">
                    <img src="{{ $liver }}" class="img-left" style="top: 16px; left: 26px;">
                    <span class="card color-hepa">HEPATITIS A</span>
                    <span class="title-2">SEMANA EPIDEMIOLÓGICA 52<br></span>
                    <span class="small">25 de diciembre al 31 de diciembre de 2022</span>

                        <table class="normal">
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="border h-20">Casos 2022</td>
                                <td colspan="2" class="border h-20">259</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="border h-20">Casos nuevos</td>
                                <td colspan="2" class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="border h-20">Defunciones</td>
                                <td colspan="2" class="border h-20">0</td>
                            </tr>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="5"></td>
                            </tr>
                            <tr>
                                <td colspan="5" class="h-10"><span class="mini">Incidencia en municipios: Cuernavaca, Emiliano Zapata, Cuautla</span></td>
                            </tr>
                            <tr>
                                <td colspan="5"><span class="title-2 purple">CIERRE ANUAL 2021</span></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="border h-20">Casos 2021</td>
                                <td colspan="2" class="border h-20">160</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="border h-20">Defunciones</td>
                                <td colspan="2" class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="5"></td>
                            </tr>
                        </table>

                        {{--  <img src="{{ $liver }}" class="img-left" style="top: 275px; left: 26px">  --}}
                        <span class="card color-hepa">HEPATITIS AGUDA GRAVE DE ETIOLOGÍA DESC.</span>
                        <span class="title-2">SEMANA EPIDEMIOLÓGICA 02<br></span>
                        <span class="small">08 de enero al 14 de enero de 2023</span>

                        <table class="normal">
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border h-20">Casos probables 2023</td>
                                <td colspan="3" class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border h-20">Casos probables nuevos</td>
                                <td colspan="3" class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border h-20">Defunciones</td>
                                <td colspan="3" class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border h-20">Casos probables 2022</td>
                                <td colspan="3" class="border h-20">1</td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="5"></td>
                            </tr>
                        </table>
                        <img src="{{ $scorpio }}" class="img-left" style="top: 418px; left: 26px; width:20px;">
                        <span class="card color-alac">ALACRANISMO</span>
                        <span class="title-2">SEMANA EPIDEMIOLÓGICA 52<br></span>
                        <span class="small">25 de diciembre al 31 de diciembre de 2022</span>

                        <table class="normal">
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <td colspan="2">
                                <span class="mini">Casos, dosis aplicadas y defunciones</span>
                                <img src="https://quickchart.io/chart?c={type:'bar',data:{labels:['Total 2022','Dosis aplic.','Casos nuevos','Defunciones'], datasets:[{label:'Casos, dosis aplicadas y defunciones',data:[23406,4531,241,0], backgroundColor: 'rgba(122, 6, 105, 0.4)', borderColor: 'rgba(122, 6, 105)'}]},options:{legend:{display:false},scales: {xAxes: [{ticks: {fontColor: 'rgba(38, 38, 38)', fontSize: 13}}], yAxes: [{ticks: {fontColor: 'rgba(38, 38, 38)', fontSize: 13}}]},plugins:{datalabels:{anchor: 'end',align: 'top', color: 'rgba(38, 38, 38)',font: {weight: 'normal', size: 13}}}}} 
                                " height="180">
                            </td>
                            {{--  <tr>
                                <td class="border h-20">Total de casos 2022</td>
                                <td class="border h-20">23,406</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Total dosis aplicadas</td>
                                <td class="border h-20">47,531</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Casos nuevos</td>
                                <td class="border h-20">241</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Defunciones</td>
                                <td class="border h-20">0</td>
                            </tr>  --}}
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="h-10"><span class="mini">Incidencia en municipios: Yautepec, Jonacatepec, Pte. De Ixtla,
                                    Jojutla y Tetecala</span></td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><span class="title-2 purple">CIERRE ANUAL 2021</span></td>
                            </tr>
                            <tr>
                                <td class="border h-20-min">Casos</td>
                                <td class="border h-20-min">23,599</td>
                            </tr>
                            <tr>
                                <td class="border h-20-min">Defunciones</td>
                                <td class="border h-20-min">1</td>
                            </tr>
                        </table>
                </td>

                <td class="border-left"><img src="{{ $lungs }}" class="img-left" style="top: 11px; left: 400px;">
                    <span class="card color-iras">IRAS</span>
                    <span class="title-2 purple">Incidencia en poblaci&oacute;n general<br></span>
                    <span class="title-2">SEMANA EPIDEMIOLÓGICA 52<br></span>
                    <span class="small">25 de diciembre al 31 de diciembre de 2022</span>
                    <table class="normal">
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="border h-20">Casos confirmados</td>
                            <td class="border h-20">215,467</td>
                        </tr>
                        <tr>
                            <td class="border h-20">Casos nuevos</td>
                            <td class="border h-20">5,874</td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span class="mini">Incidencia en municipios: Cuernavaca, Cuautla, Jiutepec,
                                Emiliano Zapata y Jojutla</span></td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span class="title-2 purple">CIERRE ANUAL 2021</span></td>
                        </tr>
                        <tr>
                            <td class="border h-20">Total de casos 2021</td>
                            <td class="border h-20">129,501</td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="title-2 purple">Incidencia en menores de 5 años<br></span>
                                <span class="title-2">SEMANA EPIDEMIOLÓGICA 52<br></span>
                            <span class="small">25 de diciembre al 31 de diciembre de 2022</span></td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                {{--  <span class="mini">Incidencia en menores de 5 años</span>  --}}
                                <img src="https://quickchart.io/chart?c={type:'bar',data:{labels:['Casos 2022','Casos nuevos','Defunciones'], datasets:[{label:'Incidencia en menores de 5 años',data:[51155,1080,0], backgroundColor: 'rgba(87, 22, 158, 0.4)', borderColor: 'rgba(87, 22, 158)'}]},options:{legend:{display:false},scales: {xAxes: [{ticks: {fontColor: 'rgba(38, 38, 38)', fontSize: 13}}], yAxes: [{ticks: {fontColor: 'rgba(38, 38, 38)', fontSize: 13}}]},plugins:{datalabels:{anchor: 'end',align: 'top', color: 'rgba(38, 38, 38)',font: {weight: 'normal', size: 13}}}}} 
                                " height="180">
                            </td>
                        </tr>
                        {{--  <tr>
                            <td class="border h-20">Casos 2022</td>
                            <td class="border h-20">51,155</td>
                        </tr>
                        <tr>
                            <td class="border h-20">Casos nuevos</td>
                            <td class="border h-20">1,080</td>
                        </tr>
                        <tr>
                            <td class="border h-20">Defunciones</td>
                            <td class="border h-20">0</td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>  --}}
                        <tr>
                            <td colspan="2"><span class="mini">Incidencia en municipios: Cuernavaca, Cuautla, Jiutepec,
                                Emiliano Zapata y Jojutla</span><br><br>
                                <span class="title-2 purple">CIERRE ANUAL 2021<br></td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="border h-20">Total de casos </td>
                            <td class="border h-20">25,304</td>
                        </tr>
                        <tr>
                            <td class="h-10" colspan="2"></td>
                        </tr>
                    </table>

                    <img src="{{ $infection }}" class="img-left" style="top: 548px; left: 396px; width:20px;">
                    <span class="card color-viru">VIRUELA SÍMICA</span>
                    <span class="title-2">SEMANA EPIDEMIOLÓGICA 02<br></span>
                    <span class="small">08 de enero al 14 de enero de 2023</span>
                        <table class="normal">
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td class="border h-20">Casos confirmados (acomulado)</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Casos nuevos confirmados</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Casos estudiados</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Casos descartados</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Casos probables</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Casos confirmados 2022 (cierre)</td>
                                <td class="border h-20">25</td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                        </table>

                    
                </td>

                <td class="border-left">
                    

                    <img src="{{ $colon }}" class="img-left" style="top: 3px; left: 770px;">
                    <span class="card color-edas">EDAS</span>
                    <span class="title-2 purple">Incidencia en poblaci&oacute;n general<br></span>
                    <span class="title-2">SEMANA EPIDEMIOLÓGICA 52<br></span>
                    <span class="small">25 de diciembre al 31 de diciembre de 2022</span>
                        <table class="normal">
                            <tr>
                                <td class="border h-20">Casos 2022</td>
                                <td class="border h-20">58,140</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Casos nuevos</td>
                                <td class="border h-20">713</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Defunciones</td>
                                <td class="border h-20">0</td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span class="mini">Incidencia en municipios: Cuernavaca, Cuautla, Emiliano
                                    Zapata, Jiutepec, y Jojutla</span><br><br>
                                <span class="title-2 purple">CIERRE ANUAL EDAS 2021</span>
                                </td>
                            </tr>
                            {{--  <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>  --}}
                            <tr>
                                <td class="border h-20-min">Casos 2021</td>
                                <td class="border h-20-min">46,514</td>
                            </tr>
                            <tr>
                                <td class="border h-20-min">Defunciones</td>
                                <td class="border h-20-min">0</td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <span class="title-2 purple">Incidencia en menores de 5 años<br></span>
                                <span class="title-2">SEMANA EPIDEMIOLÓGICA 52<br></span>
                                <span class="small">25 de diciembre al 31 de diciembre de 2022</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    {{--  <span class="mini">Incidencia en menores de 5 años</span>  --}}
                                    <img src="https://quickchart.io/chart?c={type:'bar',data:{labels:['Casos 2022','Casos nuevos','Defunciones'], datasets:[{label:'Incidencia en menores de 5 años',data:[10250,129,0], backgroundColor: 'rgba(163, 0, 127, 0.4)', borderColor: 'rgba(163, 0, 127)'}]},options:{legend:{display:false},scales: {xAxes: [{ticks: {fontColor: 'rgba(38, 38, 38)', fontSize: 13}}], yAxes: [{ticks: {fontColor: 'rgba(38, 38, 38)', fontSize: 13}}]},plugins:{datalabels:{anchor: 'end',align: 'top', color: 'rgba(38, 38, 38)',font: {weight: 'normal', size: 13}}}}} 
                                    " height="180">
                                </td>
                            </tr>
                            {{--  <tr>
                                <td class="border h-20">Casos 2022</td>
                                <td class="border h-20">10,250</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Casos nuevos</td>
                                <td class="border h-20">129</td>
                            </tr>
                            <tr>
                                <td class="border h-20">Defunciones</td>
                                <td class="border h-20">0</td>
                            </tr>  --}}
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span class="mini">Incidencia en municipios: Cuernavaca, Cuautla, Emiliano Zapata, Jiutepec, y Jojutla</span><br><br>
                                <span class="title-2 purple">CIERRE ANUAL 2021</span>
                                </td>
                            </tr>
                            {{--  <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>  --}}
                            <tr>
                                <td class="border h-20-min">Casos 2021</td>
                                <td class="border h-20-min">8,214</td>
                            </tr>
                            <tr>
                                <td class="border h-20-min">Defunciones</td>
                                <td class="border h-20-min">0</td>
                            </tr>
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                        </table>

                        <img src="{{ $injection }}" class="img-left" style="top: 606px; left: 767px">
                        <span class="card color-esav">ESAVI</span>
                        <span class="title-2">SEMANA EPIDEMIOLÓGICA 52<br></span>
                        <span class="small">25 de diciembre al 31 de diciembre de 2022</span>
                        <table class="normal">
                            <tr>
                                <td class="h-10" colspan="2"></td>
                            </tr>
                            <tr>
                                <td class="border h-20-min">Esavi covid total</td>
                                <td class="border h-20-min">409</td>
                            </tr>
                            <tr>
                                <td class="border h-20-min">Esavi covid 2023 (acumulado)</td>
                                <td class="border h-20-min">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20-min">Esavi covid (nuevos)</td>
                                <td class="border h-20-min">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20-min">Esavi no covid 2023 (acum.)</td>
                                <td class="border h-20-min">0</td>
                            </tr>
                            <tr>
                                <td class="border h-20-min">Esavi no covid 2023 (nuevos)</td>
                                <td class="border h-20-min">0</td>
                            </tr>
                        </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
