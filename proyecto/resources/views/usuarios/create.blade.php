            @extends('layouts.modal')
            @section ('content')
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <form method="POST" action="{{ route('usuarios.save') }}" >
                @csrf
                <div class="container">
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            Ingrese los siguientes datos del usuario
                        </div><hr>
                        <div class="col-xs-12 col-sm-4 mt-2">
                            <label>Nombre de usuario</label>
                            <input type="text" name="username" class="form form-gray" id="username">
                        </div>
                        <div class="col-xs-12 col-sm-4 mt-2">
                            <label>Nombre(s)</label>
                            <input type="text" name="nombre" class="form form-gray" id="nombre">
                        </div>
                        <div class="col-xs-12 col-sm-4 mt-2">
                            <label>Primer apellido</label>
                            <input type="text" name="pri_ape" class="form form-gray" id="pri_ape">
                        </div>
                        <div class="col-xs-12 col-sm-4 mt-2">
                            <label>Segundo apellido</label>
                            <input type="text" name="seg_ape" class="form form-gray" id="seg_ape">
                        </div>
                        <div class="col-xs-12 col-sm-4 mt-2 mb-2">
                            <label>Tipo de personal</label>
                            <select class="form-gray form-control" name="tipo_usu">
                                <option value="" disabled="">Seleccione una opción</option>
                                <option value="1">Administrador</option>
                                <option value="2">Capturista</option>
                            </select>
                        </div><hr>
                        <div class="container">
                            <div class="mb-2 col-12 text-center">
                                Permisos de lectura, escritura y edición
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="dengue" name="dengue" value="1">
                              <label class="form-check-label" for="inlineCheckbox1">Dengue</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="influenza" name="influenza" value="2">
                              <label class="form-check-label" for="inlineCheckbox2">Influenza</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="iras" name="iras" value="3" >
                              <label class="form-check-label" for="inlineCheckbox3">IRAS</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="edas" name="edas" value="4" >
                              <label class="form-check-label" for="inlineCheckbox3">EDAS</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="hep_a" name="hep_a" value="5" >
                              <label class="form-check-label" for="inlineCheckbox3">Hepatitis A</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="hep_b" name="hep_b" value="6" >
                              <label class="form-check-label" for="inlineCheckbox3">Hepatitis aguda grave de etiología desconocida</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="alacran" name="alacran" value="7" >
                              <label class="form-check-label" for="inlineCheckbox3">Alacrinismo</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="Chin" name="Chin" value="8" >
                              <label class="form-check-label" for="inlineCheckbox3">Chinkungunya</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="zika" name="zika" value="9" >
                              <label class="form-check-label" for="inlineCheckbox3">Zika</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="vir_sis" name="vir_sis" value="10" >
                              <label class="form-check-label" for="inlineCheckbox3">Viruela Símica
                              </label>
                          </div>
                      </div>

                  </div>

              <div class="card-body text-center">
                <button type="button" onclick="window.parent.closeModal();" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                <button type="submit"class="btn btn-success">Guardar</button>
            </div>
              </div>
        </form>
        <script type="text/javascript">
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