@extends('layouts.modal')
@section ('content')
<form method="POST" action="{{route('esavi.update',$esavi)}}">
	@csrf
<div class="container">
   <div class="row mt-4">
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Semana</label>
           <select class="form form-gray form-lavander form-control" id="sem" name="sem">
            @for($i=1; $i<53;$i++)
            	@if($esavi->semana == $i)
            	<option value="{{$i}}" selected>Semana {{$i}}</option>
            	@endif 	
            	<option value="{{$i}}">Semana {{$i}}</option>
            @endfor    
        </select>
       </div>
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Año</label>
           <input type="number" name="anio" class="form form-control form-gray" id="anio" value="{{$esavi->anio}}">
       </div>
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Casos COVID 19</label>
           <input type="number" name="casos_cov" class="form form-control form-gray" id="casos_cov" value="{{$viruela->casos_cov}}">
       </div>
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Casos no COVID 19 </label>
           <input type="number" name="casos_nocov" class="form form-control form-gray" id="casos_nocov" value="{{$viruela->casos_nocov}}">
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