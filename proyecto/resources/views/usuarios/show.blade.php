@extends('layouts.modal')
@section ('content')

<div class="row mt-4">

</div>


<div class="card-body text-center mt-4">
    <button type="button" onclick=" window.parent.closeModal();" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
    <button type="submit"class="btn btn-dark">Guardar</button>
</div>

 <script type="text/javascript">
    localStorage.setItem('res','');
    @if (session('ok'))
    localStorage.setItem('res','ok');
    window.parent.closeModal();
    @else
    localStorage.setItem('res','{{Session::get('nook')}}');
    window.parent.closeModal();
    @endif
  </script>

@endsection