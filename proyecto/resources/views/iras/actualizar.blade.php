@extends('layouts.modal')
@section ('content')
<form method="POST" action="{{route('iras.update',$ira)}}">
	@csrf
    <div class="container">
       <div class="row mt-4">
           <div class="col-xs-12 col-sm-4 mt-2">
               <label>Semana</label>
               <select class="form form-gray form-lavander form-control" id="sem" name="sem">
                @for($i=1; $i<53;$i++)
                @if($ira->semana == $i)
                <option value="{{$i}}" selected>Semana {{$i}}</option>
                @endif 	
                <option value="{{$i}}">Semana {{$i}}</option>
                @endfor    
            </select>
        </div>
        <div class="col-xs-12 col-sm-4 mt-2">
           <label>Año</label>
           <input type="number" name="anio" class="form form-control form-gray" id="anio" value="{{$ira->anio}}">
       </div>
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Casos confirmados</label>
           <input type="number" name="casos" class="form form-control form-gray" id="casos" value="{{$ira->casos}}">
       </div>
       <div class="col-xs-12 col-sm-8 mt-2">
           <label>Municipios por incidencia</label>
           {{ Form::select('mun_iras[]', $municipios, $mun_array, ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_iras[]','multiple' =>'multiple'] )}}
       </div>
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Casos en menores de 5 años</label>
           <input type="number" name="casos5" class="form form-control form-gray" id="casos5" value="{{$ira->casos_men5}}">
       </div>
       <div class="col-xs-12 col-sm-4 mt-2">
           <label>Municipios por incidencias en menores de cinco años</label>
           {{ Form::select('mun_iras5[]', $municipios, $mun_array5, ['class' => 'municipios form-control form-gray form-lavender form-lavender','id'=>'mun_iras5[]','multiple' =>'multiple'] )}}
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

    });
    localStorage.setItem('res','');
    @if(session('ok'))
    localStorage.setItem('res','ok');
    window.parent.closeModal();
    @elseif(session('nook'))
    localStorage.setItem('res','{{Session::get('nook')}}');
    window.parent.closeModal();
    @endif
</script>
@endsection