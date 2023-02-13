
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->


  <script src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <!-- Styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" type="text/css" href="{{ url('/css/plantilla.css') }}" /> -->
  <!--Dashboard SOS-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dashboard.css') }}" />
  
  <!--Datarangepicker--->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<script src="https://kit.fontawesome.com/b60b398386.js" crossorigin="anonymous"></script>
  <link rel="icon" class="rounded-circle" href="{{URL::asset('/image/ssm_logo_32.png')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" />
  <title>@yield('title')</title>

  <style type="text/css">
  body{
    max-width: 100%;
    overflow-x:hidden;
  }
.modal {
  overflow-y:auto;
}
  .menu-img:hover {
    -webkit-transform:scale(1.2);
    -moz-transform:scale(1.2);
    -ms-transform:scale(1.2);
    -o-transform:scale(1.2);
    transform:scale(1.2);
  }

  .forms-personalizados:focus{
    color:black;
    background-color: white;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(0, 123, 255 / 25%);
  }

  .forms-personalizados{
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
</style>

<body class="g-sidenav-show bg-gray-200 min-vh-100 ">
 <div class="wrapper">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-transparent ps" id="sidenav-main">
    <div class="sidenav-header p-2 bg-transparent text-center">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a href="https://www.ssm.gob.mx" target="_blank">
        <img src="{{URL::asset('/image/ssm_logo_blanco.png')}}" alt="logo_SSM" class="img-responsive navbar-brand-img">
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 ps" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('home')) ? 'bg-gradient-primary active' : '' }}" href="{{ url('/home') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Inicio</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white {{ (request()->is('historial.dengue')) ? 'bg-gradient-primary active' : '' }} " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">event</i>
            </div>
            <span class="nav-link-text ms-1 w-100">Historial</span><i class="material-icons opacity-10 text-white text-right fs-6">keyboard_arrow_down</i>
        </a>
        <div class="dropdown-menu mx-3" aria-labelledby="navbarDropdownMenuLink">
        @seccion('1')
          <a class="dropdown-item" href="{{route('historial.dengue')}}">Historial Dengue</a>
        @endseccion 
        @seccion('2')
          <a class="dropdown-item" href="{{route('historial.influenza')}}">Historial Influenza</a>
        @endseccion 
        @seccion('3')
          <a class="dropdown-item" href="{{route('historial.iras')}}">Historial IRAS</a>
        @endseccion
        @seccion('4')
          <a class="dropdown-item" href="{{route('historial.edas')}}">Historial EDAS</a>
        @endseccion 
        @seccion('5')
          <a class="dropdown-item" href="{{route('historial.hepatitis')}}">Historial Hepatitis A</a>
        @endseccion
        @seccion('6')
          <a class="dropdown-item" href="{{route('historial.hepa')}}">Historial Hepatitis Aguda</a>
       @endseccion
       @seccion('7')
          <a class="dropdown-item" href="{{route('historial.alacranismo')}}">Historial Alacranismo</a>
       @endseccion
       @seccion('8')
          <a class="dropdown-item" href="{{route('historial.chinkungunya')}}">Historial Chinkungunya</a>
       @endseccion 
       @seccion('9')
          <a class="dropdown-item" href="{{route('historial.zika')}}">Historial Zika</a>
       @endseccion 
       @seccion('10')
          <a class="dropdown-item" href="{{route('historial.viruela')}}">Historial Viruela Símica</a>
       @endseccion
       @seccion('11')
          <a class="dropdown-item" href="{{route('historial.esavi')}}">Historial ESAVI</a>
       @endseccion
        </div>
      </li>
         <li class="nav-item">
        <a class="nav-link text-white {{ (request()->is('usuarios')) ? 'bg-gradient-primary active' : '' }} " href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">people_alt</i>
            </div>
            <span class="nav-link-text ms-1 w-100">Usuarios</span><i class="material-icons opacity-10 text-white text-right fs-6">keyboard_arrow_down</i>
        </a>
        <div class="dropdown-menu mx-3" aria-labelledby="navbarDropdownMenuLink2">
          <a class="dropdown-item" href="{{route('usuarios.index')}}">Ver usuarios</a>
        </div>
      </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-primary mt-4 w-100" href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" type="button"><i class="fa fa-sign-out me-sm-1 pr-2"></i>Cerrar sesión</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </div>
  </aside>

  <!-- Page Content  -->

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 pb-0 pt-1 px-0 me-sm-6 me-5" style="background-color: transparent">
            <img src="{{URL::asset('/image/LOGO_SIEM_MINI.png')}}" alt="logo_SSM"  width="35px;" class="img-responsive navbar-brand-img">
            <li class="breadcrumb-item text-sm opacity-9 text-dark mt-3" href="javascript:;">SIEM</li>
          </ol>
          <h4 id="titulo" class="font-weight-bolder mb-0">Sistema de Información Epidemiológica de Morelos</h4>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div> -->
          </div>
          <ul class="navbar-nav  justify-content-end">
            <!-- <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">{{Auth::user()->nombreCompleto}}</span>
              </a>
            </li> -->
            <li class="nav-item d-flex align-items-center d-none d-sm-block">
              <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-circle me-sm-1"></i>
                  <span class="d-sm-inline d-none">{{Auth::user()->nombreCompleto}}</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" type="button"><i class="fa fa-sign-out me-sm-1 pr-2"></i>Cerrar sesión</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </div>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-0">
     @yield('content')
     <footer class="footer py-3">
      <div class="container-fluid p-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 pl-3">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <a href="https://www.ssm.gob.mx" class="font-weight-bold" target="_blank">Servicios de Salud de Morelos</a> <script>
                document.write(new Date().getFullYear())
              </script>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>
</div>
</main>
@if(Auth::user()->id==2)
<div class="fixed-plugin">
  <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
    <i class="material-icons py-2">settings</i>
  </a>
  <div class="card shadow-lg">
    <div class="card-header pb-0 pt-3">
      <div class="float-start">
        <h5 class="mt-3 mb-0">Configuración SOS</h5>
        <p>Personaliza el dashboard de todos los usuarios</p>
      </div>
      <div class="float-end mt-0 pt-0">
        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <!-- End Toggle Button -->
    </div>
    <hr class="horizontal dark my-1">
    <div class="card-body pt-0">
      <!-- Sidebar Backgrounds -->
      <div>
        <h6 class="mb-0">Color elementos</h6>
        <p class="text-sm">Botones y link activo del menú</p>
      </div>
      <a href="javascript:void(0)" class="switch-trigger background-color">
        <div class="badge-colors my-2 text-start">

          {!! Form::open(array('route' => array('usuarios.custom'),'method'=>'post','class'=>'container')) !!}

          <button id="toSend" type="submit"class="btn d-none">
          </button>
          <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="bgcolor(this)"></span>
          <span class="badge filter bg-gradient-dark" type="submit" data-color="dark" onclick="bgcolor(this)"></span>
          <span class="badge filter bg-gradient-info" data-color="info" onclick="bgcolor(this)"></span>
          <span class="badge filter bg-gradient-success" data-color="success" onclick="bgcolor(this)"></span>
          <span class="badge filter bg-gradient-warning" data-color="warning" onclick="bgcolor(this)"></span>
          <span class="badge filter bg-gradient-danger" data-color="danger" onclick="bgcolor(this)"></span>
        </div>
      </a>
      <!-- Sidenav Type -->
      <div class="mt-3">
        <h6 class="mb-0">Color menú</h6>
        <p class="text-sm">Color de fondo menú lateral</p>
      </div>
      <div class="d-flex">
        <button class="btn bg-gradient-dark px-3 mb-2 " data-class="bg-gradient-dark" onclick="menucolor(this)">Negro</button>
        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="menucolor(this)">Morado</button>
        <button class="btn bg-gradient-dark px-3 mb-2 ms-2 " data-class="bg-white" onclick="menucolor(this)">Blanco</button>
      </div>
      <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
      <hr class="horizontal dark my-3">
      <hr class="horizontal dark my-sm-4">
      <div class="row">
        <div class="mt-3">
          <h6 class="mb-0">Ordenes antiguas</h6>
          <p class="text-sm">Límite de días a mostrar</p>
        </div>
        <div class="col-md-12 mb-3">
          <div class="input-group">
            <input type="number" class="form-control form-gray" id="limite" placeholder="Límite de días" aria-describedby="dias" value="">
          </div>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endif
</div> 

<!--Modal: Name-->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4">
    <div class="modal fade" id="modaliframe"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" id="dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #534063; color:#FFFFFF;">
            <h5 class="modal-title text-md text-white" id="modaltitulo"></h5>
            <button type="button" onclick=" window.parent.closeModal();" class="close" data-dismiss="modal" aria-label="Close" > 
              <span aria-hidden="true" >&times;</span>
            </button>
          </div>
          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" id="iframemarca" src=""  frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Modal: Name-->

@yield('modals')

<div class="position-fixed bottom-4 end-1 z-index-2">
  <div class="toast fade hide p-2" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">
    <div class="toast-header border-0">
      <i class="material-icons text-success me-2">
        check
      </i>
      <span class="me-auto font-weight-bold">Registro exitoso </span>
      <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
    </div>
    <hr class="horizontal dark m-0">
    <div class="toast-body">
      El registro fue procesado correctamente.
    </div>
  </div>
  <div class="toast fade hide p-2 mt-2" role="alert" aria-live="assertive" id="dangerToast" aria-atomic="true">
    <div class="toast-header border-0">
      <i class="material-icons text-danger me-2">
        campaign
      </i>
      <span class="me-auto text-gradient text-danger font-weight-bold">Registro fallido </span>
      <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
    </div>
    <hr class="horizontal dark m-0">
    <div class="toast-body">
     @if(Auth::user()->tipo_usuario==1)
     El registro no fue procesado correctamente.
     @else
     <span id="nook"></span>
     @endif
   </div>
 </div>
   <div class="toast fade hide p-2 mt-2" role="alert" aria-live="assertive" id="warningToast" aria-atomic="true">
    <div class="toast-header border-0">
      <i class="material-icons text-danger me-2">
        campaign
      </i>
      <span class="me-auto text-gradient text-danger font-weight-bold">Campos imcompletos </span>
      <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
    </div>
    <hr class="horizontal dark m-0">
    <div class="toast-body">
     Debe ingresar todos los campo marcados.
   </div>
 </div>
    <div class="toast fade hide p-2 mt-2" role="alert" aria-live="assertive" id="semanaToast" aria-atomic="true">
    <div class="toast-header border-0">
      <i class="material-icons text-danger me-2">
        campaign
      </i>
      <span class="me-auto text-gradient text-danger font-weight-bold">Semana previamente registrada </span>
      <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
    </div>
    <hr class="horizontal dark m-0">
    <div class="toast-body">
     La semana ya ha sido registrada previamente, puede actualizar los datos en la sección de consulta.
   </div>
 </div>
</div>
</body>

<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ URL::asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/bootstrap.min.js') }}"></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<script type="text/javascript">
  $(document).ready(function(){
    localStorage.setItem('res','');
    setTimeout(function(){
     localStorage.setItem('res','');
   }, 300000);

});
  localStorage.setItem('res','');

  $('#modaliframe').on('hidden.bs.modal', function () {
    var val = localStorage.getItem('res');

    if(val != ''){
      if (val == 'ok'){
        setTimeout(() => {
          $("#successToast").toast("show");
        }, 100);
        localStorage.getItem('res', '');
        setTimeout(function(){
       }, 2500);
      }else{
        @if(Auth::user()->tipo_usuario==2)
        document.getElementById("nook").textContent = val;
        @endif
        setTimeout(() => {
          $("#dangerToast").toast("show");
        }, 100);
        localStorage.getItem('res', '');
        setTimeout(function(){
          @if(Auth::user()->tipo_usuario==1)
          @endif
        }, 2500);
      }
    }

  });

</script>

<script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/plantilla.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/dashboard-sos.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/dashboard-sos.min.js') }}"></script>


</html>
