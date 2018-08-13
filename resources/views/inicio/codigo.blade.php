<!DOCTYPE html>
<html lang="es">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebol</title>
    @include('inicio.partes.meta')        
    @include('inicio.partes.styles.css')

  </head>
  <body>
    @include('inicio.partes.conf')
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="ms-site-container">
     
    @include('inicio.partes.modal')
    @include('inicio.partes.navLogo')  
    @include('inicio.partes.nav')
      <!-- ms-hero ms-hero-black -->
    
      <div class="ms-hero-page-override ms-hero-img-team ms-hero-bg-primary">
        <div class="container">
          <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Formulario de Afiliación</h1>
            <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Llena el formulario para completar el registro</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card card-hero animated fadeInUp animation-delay-7">
          <div class="card-body">
                {{Form::open(['route'=>['codigoUsuario',$ci],'class'=>'form-horizontal','files'=>TRUE,'method'=>'POST'])}}
              <fieldset class="container">
                <div class="form-group row {{ \Session::has('error')==true ? ' has-error is-focused' : '' }}">
                    <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Codigo de lider de Equipo (Opcional)</label>
                    <div class="col-lg-9">
                      {{Form::text('cod_face',null,['class'=>'form-control','id'=>'inputName','placeholder'=>'Si no tiene un equipo deje en blanco el campo de texto'])}}                    
                      @if (\Session::has('error')==true)
                      <span class="help-block">
                          <strong>{{ \Session::get('error') }}</strong>
                      </span>
                      @endif
                  </div>
                </div>
                <div class="form-group row justify-content-end text-center">
                  <div class="col-lg-10">
                    <button type="submit" class="btn btn-raised btn-primary">Registrar</button>
                    <button type="button" class="btn btn-danger">Cancelar</button>
                  </div>
                </div>
              </fieldset>
            {{Form::close()}}
          </div>
        </div>
      </div>
    @include('sweetalert::alert')
    @include('inicio.partes.footer')
    <!-- ms-site-container -->
    @include('inicio.partes.menuL')
    @include('inicio.partes.styles.js')
    </div>
    </body>
</html>