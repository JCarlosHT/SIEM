@if (auth::user())
@if (auth::user()->iactivo !=1 )    
@php
header("Location: " . URL::to('/'), true, 302);
exit();
@endphp  
@endif            @else
@php
header("Location: " . URL::to('/'), true, 302);
exit();
@endphp 
@endif
@extends('layouts.plantilla')
<style type="text/css">
    .color-dengue{
        background-color: #7C52BA!important;
        color: white!important;
    }

    .color-influ{
        background-color:  #370A68!important;
        color: white!important;
    }

    .color-chik{
        background-color: #441281!important;
        color: white!important;
    }

    .color-zika{
        background-color: #5A388C!important;
        color: white!important;
    }
    .color-iras{
        background-color:  #57169E!important;
        color: white!important;
    }

    .color-edas{
        background-color: #A3007F!important;
        color: white!important;
    }

    .color-hepa{
        background-color: #6C1290!important;
        color: white!important;
    }

    .color-alac{
        background-color: #7A0669!important;
        color: white!important;
    }

    .color-viru{
        background-color: #7127C3!important;
        color: white!important;
    }

    .color-esav{
        background-color: #B94294!important;
        color: white!important;
    }

</style>
@section('content')
<div class="container-fluid card p-4">
    <div class="row">
        @csrf
        @seccion('1')
        <div class="col-12 rounded color-dengue">
         <b> Dengue </b>
     </div>
     <div class="col-md-2 col-sm-12 mt-2">
        <label>Semana de registro</label>
        <select class="form-control form-lavender w-100 d-inline custom-select" id="semana_deb">
            <option value="">Seleccione la semana</option>
            @for($i=1; $i<53;$i++)
            <option value="{{$i}}">Semana {{$i}}</option>
            @endfor    
        </select>
    </div>
    <div class="col-md-2 col-sm-12 mt-2">
        <label>Año</label>
        <input class="form-control form-gray form-lavender" type="number" min="2023" max="2099" step="1" value="2023" name="anio" id="anio" />
    </div>
    <div class="col-md-3 col-sm-12 mt-2">
        <label>Casos confirmados</label>
        <input class="form-control form-gray form-lavender" type="number" name="tot_cof_den" id="tot_cof_den">
    </div>
    <div class="col-md-2 col-sm-12 mt-2">
        <label>Dengue no grave</label>
        <input class="form-control form-gray form-lavender" type="number" name="den_nograv" id="den_nograv">
    </div>
    <div class="col-md-3 col-sm-12 mt-2">
        <label>Dengue con signos de alarma</label>
        <input class="form-control form-gray form-lavender" type="number" name="den_aler" id="den_aler">
    </div>
    <div class="col-md-2 col-sm-12 mt-2">
        <label>Dengue grave</label>
        <input class="form-control form-gray form-lavender" type="number" name="den_grav" id="den_grav">
    </div>
    <div class="col-md-2 col-sm-12 mt-2">
        <label>Defunciones</label>
        <input class="form-control form-gray form-lavender" type="number" name="den_def" id="den_def">
    </div>
    <div class="col-md-3 col-sm-12 mt-2">
        <label>Incidencias por municipio</label>
        {{ Form::select('mun_den', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_den','required','multiple' =>'multiple'] )}}
    </div>
    <div class="col-12 my-2 text-right">
        <a href="#" class="btn color-dengue" id="reg_den" name="reg_den">Registrar <i class="fa fa-save fa-lg ml-2"></i></a>
    </div>
    @endseccion
    @seccion('2') 
    <div class="col-12 rounded mt-2 color-influ">
        <b> Influenza </b>
    </div>  
    <div class="col-md-2 col-sm-12 mt-2">
        <label>Semana de registro</label>
        <select class="form-control form-lavender w-100 d-inline custom-select" id="semana_inf">
            <option>Seleccione la semana</option>
            @for($i=1; $i<53;$i++)
            <option value="{{$i}}">Semana {{$i}}</option>
            @endfor    
        </select>
    </div>
    <div class="col-md-2 col-sm-12 mt-2">
        <label>Año</label>
        <input class="form-control form-gray form-lavender" type="number" min="2023" max="2099" step="1" value="2023" name="anio_inf" id="anio_inf" />
    </div>
    <div class="col-md-2 col-sm-12 mt-2">
        <label>Casos confirmados</label>
        <input class="form-control form-gray form-lavender" type="number" name="casos_inf" id="casos_inf">
    </div>
    <div class="col-md-2 col-sm-12 mt-2">
        <label>AH1N1</label>
        <input class="form-control form-gray form-lavender" type="number" name="ah1" id="ah1">
    </div>
    <div class="col-md-2 col-sm-12 mt-2">
        <label>AH3N2</label>
        <input class="form-control form-gray form-lavender" type="number" name="ah3" id="ah3">
    </div>
    <div class="col-md-2 col-sm-12 mt-2">
        <label>Influenza B</label>
        <input class="form-control form-gray form-lavender" type="number" name="infb" id="infb">
    </div>
    <div class="col-md-2 col-sm-12 mt-2">
        <label>Defunciones (AH3N2)</label>
        <input class="form-control form-gray form-lavender" type="number" name="def_inf" id="def_inf">
    </div>
    <div class="col-md-3 col-sm-12 mt-2">
        <label>Incidencias por municipio</label>
        {{ Form::select('mun_inf', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_inf','required','multiple' =>'multiple'] )}}
    </div>
    <div class="col-12 my-2 text-right">
        <a href="#" class="btn color-influ" id="reg_inf" name="reg_inf">Registrar <i class="fa fa-save fa-lg ml-2"></i></a>
    </div>
    @endseccion
    @seccion('3')
    <div class="col-12 rounded mt-2 color-iras">
       <b> IRAS </b>
   </div>     
   <div class="col-md-2 col-sm-12 mt-2">
    <label>Semana de registro</label>
    <select class="form-control form-lavender w-100 d-inline custom-select" id="semana_iras">
        <option>Seleccione la semana</option>
        @for($i=1; $i<53;$i++)
        <option value="{{$i}}">Semana {{$i}}</option>
        @endfor    
    </select>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Año</label>
    <input class="form-control form-gray form-lavender" type="number" min="2023" max="2099" step="1" value="2023" name="anio_iras" id="anio_iras" />
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Casos nuevos</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_iras" id="casos_iras">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Incidencias por municipio</label>
    {{ Form::select('mun_iras', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_iras','required','multiple' =>'multiple'] )}}
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Casos nuevos menores 5 años</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_iras5" id="casos_iras5">
</div>
<div class="col-md-4 col-sm-12 mt-2">
    <label>Incidencias por municipio menores 5 años</label>
    {{ Form::select('mun_iras5', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_iras5','required','multiple' =>'multiple'] )}}
</div>
<div class="col-12 my-2 text-right">
    <a href="#" class="btn color-iras" id="reg_iras" name="reg_iras">Registrar <i class="fa fa-save fa-lg ml-2"></i></a>
</div>
@endseccion  
@seccion('4')
<div class="col-12 rounded mt-2 color-edas">
   <b> EDAS </b>
</div>  
<div class="col-md-2 col-sm-12 mt-2">
    <label>Semana de registro</label>
    <select class="form-control form-lavender w-100 d-inline custom-select" id="semana_edas">
        <option>Seleccione la semana</option>
        @for($i=1; $i<53;$i++)
        <option value="{{$i}}">Semana {{$i}}</option>
        @endfor    
    </select>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Año</label>
    <input class="form-control form-gray form-lavender" type="number" min="2023" max="2099" step="1" value="2023" name="anio_edas" id="anio_edas" />
</div>   
<div class="col-md-2 col-sm-12 mt-2">
    <label>Casos nuevos</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_edas" id="casos_edas">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Incidencias por municipio</label>
    {{ Form::select('mun_edas', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_edas','required','multiple' =>'multiple'] )}}
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Casos nuevos menores 5 años</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_edas5" id="casos_edas5">
</div>
<div class="col-md-4 col-sm-12 mt-2">
    <label>Incidencias por municipio menores 5 años</label>
    {{ Form::select('mun_edas5', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_edas5','required','multiple' =>'multiple'] )}}
</div>
<div class="col-12 my-2 text-right">
    <a href="#" class="btn color-edas" id="reg_edas" name="reg_edas">Registrar <i class="fa fa-save fa-lg ml-2"></i></a>
</div>
@endseccion 
@seccion('5')
<div class="col-12 rounded mt-2 color-hepa">
   <b> Hepatitis A</b>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Semana de registro</label>
    <select class="form-control form-lavender w-100 d-inline custom-select" id="semana_hep">
        <option>Seleccione la semana</option>
        @for($i=1; $i<53;$i++)
        <option value="{{$i}}">Semana {{$i}}</option>
        @endfor    
    </select>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Año</label>
    <input class="form-control form-gray form-lavender" type="number" min="2023" max="2099" step="1" value="2023" name="anio_hep" id="anio_hep" />
</div>   
<div class="col-md-3 col-sm-12 mt-2">
    <label>Casos nuevos</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_hep" id="casos_hep">
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Defunciones</label>
    <input class="form-control form-gray form-lavender" type="number" name="def_hep" id="def_hep">
</div>  
<div class="col-md-3 col-sm-12 mt-2">
    <label>Incidencias por municipio</label>
    {{ Form::select('mun_hep', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_hep','required','multiple' =>'multiple'] )}}
</div>  
<div class="col-12 my-2 text-right">
    <a href="#" class="btn color-hepa" id="reg_hep" name="reg_hep">Registrar <i class="fa fa-save fa-lg ml-2"></i></a>
</div>
@endseccion
@seccion('6')
<div class="col-12 rounded mt-2 color-hepa">
   <b> Hepatitis aguda grave de etiología desconocida</b>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Semana de registro</label>
    <select class="form-control form-lavender w-100 d-inline custom-select" id="semana_hepa">
        <option>Seleccione la semana</option>
        @for($i=1; $i<53;$i++)
        <option value="{{$i}}">Semana {{$i}}</option>
        @endfor    
    </select>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Año</label>
    <input class="form-control form-gray form-lavender" type="number" min="2023" max="2099" step="1" value="2023" name="anio_hepa" id="anio_hepa" />
</div>     
<div class="col-md-3 col-sm-12 mt-2">
    <label>Casos probables nuevos</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_hepa" id="casos_hepa">
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Defunciones</label>
    <input class="form-control form-gray form-lavender" type="number" name="def_hepa" id="def_hepa">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Incidencias por municipio</label>
    {{ Form::select('mun_hepa', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_hepa','required','multiple' =>'multiple'] )}}
</div>  
<div class="col-12 my-2 text-right">
    <a href="#" class="btn color-hepa" id="reg_hepa" name="reg_hepa">Registrar <i class="fa fa-save fa-lg ml-2"></i></a>
</div>
@endseccion
@seccion('7')
<div class="col-12 rounded mt-2 color-alac">
   <b> Alacrinismo</b>
</div>    
<div class="col-md-2 col-sm-12 mt-2">
    <label>Semana de registro</label>
    <select class="form-control form-lavender w-100 d-inline custom-select" id="semana_ala">
        <option>Seleccione la semana</option>
        @for($i=1; $i<53;$i++)
        <option value="{{$i}}">Semana {{$i}}</option>
        @endfor    
    </select>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Año</label>
    <input class="form-control form-gray form-lavender" type="number" min="2023" max="2099" step="1" value="2023" name="anio_ala" id="anio_ala" />
</div> 
<div class="col-md-2 col-sm-12 mt-2">
    <label>Dosis aplicadas</label>
    <input class="form-control form-gray form-lavender" type="number" name="dosis" id="dosis">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Casos nuevos</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_ala" id="casos_ala">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Defunciones</label>
    <input class="form-control form-gray form-lavender" type="number" name="def_ala" id="def_ala">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Incidencias por municipio</label>
    {{ Form::select('mun_ala', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_ala','required','multiple' =>'multiple'] )}}
</div>  
<div class="col-12 my-2 text-right">
    <a href="#" class="btn color-alac" id="reg_ala" name="reg_ala">Registrar <i class="fa fa-save fa-lg ml-2"></i></a>
</div>
@endseccion
@seccion('8')
<div class="col-12 rounded mt-2 color-chik">
   <b> Chinkungunya</b>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Semana de registro</label>
    <select class="form-control form-lavender w-100 d-inline custom-select" id="semana_chi">
        <option>Seleccione la semana</option>
        @for($i=1; $i<53;$i++)
        <option value="{{$i}}">Semana {{$i}}</option>
        @endfor    
    </select>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Año</label>
    <input class="form-control form-gray form-lavender" type="number" min="2023" max="2099" step="1" value="2023" name="anio_chi" id="anio_chi" />
</div>   
<div class="col-md-2 col-sm-12 mt-2">
    <label>Casos confirmados</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_chi" id="casos_chi">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Incidencias por municipio</label>
    {{ Form::select('mun_chi', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_chi','required','multiple' =>'multiple'] )}}
</div> 
<div class="col-12 my-2 text-right">
    <a href="#" class="btn color-chik" id="reg_chi" name="reg_chi">Registrar <i class="fa fa-save fa-lg ml-2"></i></a>
</div>
@endseccion
@seccion('9')
<div class="col-12 rounded mt-2 color-zika">
   <b> Zika</b>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Semana de registro</label>
    <select class="form-control form-lavender w-100 d-inline custom-select" id="semana_zik">
        <option>Seleccione la semana</option>
        @for($i=1; $i<53;$i++)
        <option value="{{$i}}">Semana {{$i}}</option>
        @endfor    
    </select>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Año</label>
    <input class="form-control form-gray form-lavender" type="number" min="2023" max="2099" step="1" value="2023" name="anio_zik" id="anio_zik" />
</div>   
<div class="col-md-2 col-sm-12 mt-2">
    <label>Casos nuevos</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_zik" id="casos_zik">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Casos en embarazadas</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_emb" id="casos_emb">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Casos en México</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_nac" id="casos_nac">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Casos en embarazadas en México</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_emb_nac" id="casos_emb_nac">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Incidencias por municipio</label>
    {{ Form::select('mun_zik', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_zik','required','multiple' =>'multiple'] )}}
</div>
<div class="col-12 my-2 text-right">
    <a href="#" class="btn color-zika" id="reg_zik" name="reg_zik">Registrar <i class="fa fa-save fa-lg ml-2"></i></a>
</div>
@endseccion
@seccion('10')
<div class="col-12 rounded mt-2 color-viru">
   <b>Viruela Símica</b>
</div>      
<div class="col-md-2 col-sm-12 mt-2">
    <label>Semana de registro</label>
    <select class="form-control form-lavender w-100 d-inline custom-select" id="semana_vir">
        <option>Seleccione la semana</option>
        @for($i=1; $i<53;$i++)
        <option value="{{$i}}">Semana {{$i}}</option>
        @endfor    
    </select>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Año</label>
    <input class="form-control form-gray form-lavender" type="number" min="2023" max="2099" step="1" value="2023" name="anio_vir" id="anio_vir" />
</div> 
<div class="col-md-2 col-sm-12 mt-2">
    <label>Casos confirmados</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_vir" id="casos_vir">
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Casos estudiados</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_vir_est" id="casos_vir_est">
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Casos descartados</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_vir_des" id="casos_vir_des">
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Casos probables</label>
    <input class="form-control form-gray form-lavender" type="number" name="casos_vir_pro" id="casos_vir_pro">
</div>
<div class="col-md-3 col-sm-12 mt-2">
    <label>Incidencias por municipio</label>
    {{ Form::select('mun_vir', $municipios, [''], ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_vir','required','multiple' =>'multiple'] )}}
</div>
<div class="col-12 my-2 text-right">
    <a href="#" class="btn color-viru" id="reg_vir" name="reg_vir">Registrar <i class="fa fa-save fa-lg ml-2"></i></a>
</div>
@endseccion  
@seccion('11')
<div class="col-12 rounded mt-2 color-esav">
   <b>ESAVI</b>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Semana de registro</label>
    <select class="form-control form-lavender w-100 d-inline custom-select" id="semana_esa">
        <option>Seleccione la semana</option>
        @for($i=1; $i<53;$i++)
        <option value="{{$i}}">Semana {{$i}}</option>
        @endfor    
    </select>
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>Año</label>
    <input class="form-control form-gray form-lavender" type="number" min="2023" max="2099" step="1" value="2023" name="anio_esa" id="anio_esa" />
</div> 
<div class="col-md-2 col-sm-12 mt-2">
    <label>ESAVI COVID</label>
    <input class="form-control form-gray form-lavender" type="number" name="esa_cov" id="esa_cov">
</div>
<div class="col-md-2 col-sm-12 mt-2">
    <label>ESAVI NO COVID</label>
    <input class="form-control form-gray form-lavender" type="number" name="esa_nocov" id="esa_nocov">
</div>
<div class="col-12 my-2 text-right">
    <a href="#" class="btn color-esav" id="reg_esa" name="reg_esa">Registrar <i class="fa fa-save fa-lg ml-2"></i></a>
</div>
@endseccion
</div>
</div>

<script type="text/javascript" src="{{ URL::asset('js/table.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/registros.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.municipios').select2();
    });
    @if (session('ok'))
    setTimeout(() => {
        $("#successToast").toast("show");
    }, 200);
    @endif
    @if (session('nook'))
    setTimeout(() => {
        $("#dangerToast").toast("show");
    }, 200);
    @endif
</script>
@endsection