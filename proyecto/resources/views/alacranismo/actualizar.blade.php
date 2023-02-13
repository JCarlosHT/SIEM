@extends('layouts.modal')
@section ('content')
<form method="POST" action="{{route('alacranismo.update',$alacran)}}">
	@csrf
<div class="container">
   <div class="row mt-4">
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Semana</label>
           <select class="form form-gray form-lavander form-control" id="sem" name="sem">
            @for($i=1; $i<53;$i++)
            	@if($alacran->semana == $i)
            	<option value="{{$i}}" selected>Semana {{$i}}</option>
            	@endif 	
            	<option value="{{$i}}">Semana {{$i}}</option>
            @endfor    
        </select>
       </div>
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Año</label>
           <input type="number" name="anio" class="form form-control form-gray" id="anio" value="{{$alacran->anio}}">
       </div>
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Casos confirmados</label>
           <input type="number" name="casos" class="form form-control form-gray" id="casos" value="{{$alacran->casos}}">
       </div>
       
       <div class="col-xs-12 col-sm-8 mt-2">
           <label>Municipios por incidencia</label>
           {{ Form::select('mun_ala[]', $municipios, $mun_array, ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_ala[]','multiple' =>'multiple'] )}}
       </div>
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Defunciones</label>
           <input type="number" name="def" class="form form-control form-gray" id="def" value="{{$alacran->def}}">
       </div>
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Dosis</label>
           <input type="number" name="dosis" class="form form-control form-gray" id="dosis" value="{{$alacran->dosis}}">
       </div>
       
       <div class="text-center pt-2">
       	<button type="button" onclick="window.parent.closeModal();" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                <button type="submit"class="btn btn-success">Guardar</button>
       </div>
    </div>
</div>    
</form> 
<script type="text/javascript">
	
$(document).ready(function() {
        $('.municipios').select2();
        localStorage.setItem('res','');
            @if(session('ok'))
            localStorage.setItem('res','ok');
            window.parent.closeModal();
            @elseif(session('nook'))
            localStorage.setItem('res','{{Session::get('nook')}}');
            window.parent.closeModal();
            @endif
    });  
</script>
@endsection