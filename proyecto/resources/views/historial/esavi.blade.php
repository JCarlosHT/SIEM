@extends('layouts.plantilla')
@section('title','Historial')
@section ('content')

<div class="container-fluid card p-4">
    <div class="row ">
        <div  class="col-md-12">
        	<h6>HISTORIAL DE SEMANAS EPIDEMIOLÓGICAS ESAVI</h6>
        	<table id="table" class="table align-items-center mb-0">
                    <thead class="bg-transparent back-black rounded">
                        <tr>
                          <th class="text-uppercase text-xs font-weight-bolder rounded-left" scope="col">Semana</th>
                          <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Año</th>
                          <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Usuario</th>
                          <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Fecha registro</th>
                          <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Visualizar</th>
                          <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($esavi as $id => $esa)
                        <tr class="border-bottom">
                          <td class="text-center">{{$esa->semana}}</td>
                          <td>{{$esa->anio}}</td>
                          <td class="td-short">{{$esa->usuario->nombrecompleto}}</td>
                          <td>{{$esa->updated_at->format('d-m-Y')}}</td>
                          <td><a href="#" onclick="openiframe('Orden','')" class="btn btn-link text-dark p-2 mb-0"><i class="material-icons text-sm me-2">remove_red_eye</i>Mostrar</a></td>
                          <td><a href="#" onclick="openiframe('Actualizar semana epidemiológica','{{route('act_esa',$esa->id)}}')" class="btn btn-link text-primary text-gradient p-2 mb-0"><i class="material-icons text-sm me-2">edit</i>Editar</a></td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
			</div>
		</div>
	</div>	
<script type="text/javascript" src="{{ URL::asset('js/table.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

@endsection