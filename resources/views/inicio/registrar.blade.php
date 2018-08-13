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
                {{Form::open(['route'=>['crearUsuario',$codigo],'class'=>'form-horizontal','files'=>TRUE,'method'=>'POST'])}}
              <fieldset class="container">
                <div class="form-group row{{ $errors->has('nombre') ? ' has-error is-focused' : '' }}">
                  <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Nombre</label>
                  <div class="col-lg-9">
                    {{Form::text('nombre',null,['class'=>'form-control','id'=>'inputName','placeholder'=>'Nombre','required'])}}                    
                    @if ($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                    @endif
                </div>
                </div>
                <div class="form-group row{{ $errors->has('apellido') ? ' has-error is-focused' : '' }}">
                    <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Apellidos</label>
                    <div class="col-lg-9">
                    {{Form::text('apellido',null,['class'=>'form-control','id'=>'inputName','placeholder'=>'Apellidos','required'])}}                    
                    @if ($errors->has('apellido'))
                    <span class="help-block">
                        <strong>{{ $errors->first('apellido') }}</strong>
                    </span>
                    @endif
                </div>
                    </div>
                <div class="form-group row{{ $errors->has('ci') ? ' has-error is-focused' : '' }}">
                    <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Carnet de Identidad</label>
                    <div class="col-lg-9">
                    {{Form::number('ci',null,['class'=>'form-control','id'=>'inputName','placeholder'=>'Carnet de Identidad'])}}                    
                    @if ($errors->has('ci'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ci') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="form-group row{{ $errors->has('direccion') ? ' has-error is-focused' : '' }}">
                  <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Dirección</label>
                  <div class="col-lg-9">
                    {{Form::text('direccion',null,['class'=>'form-control','id'=>'inputName','placeholder'=>'Direccion','required'])}}                                          
                    @if ($errors->has('direccion'))
                    <span class="help-block">
                        <strong>{{ $errors->first('direccion') }}</strong>
                    </span>
                    @endif
                    </div>
                </div>
                  <div class="form-group row{{ $errors->has('password') ? ' has-error is-focused' : '' }}">
                    <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Contraseña</label>
                    <div class="col-lg-9">
                        {{Form::password('password',['class'=>'form-control','id'=>'inputName','placeholder'=>'Contraseña','required'])}}                                          
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Confirmar Contraseña</label>
                    <div class="col-lg-9">
                        {{Form::password('password_confirmation',['class'=>'form-control','id'=>'inputName','placeholder'=>'Contraseña','required'])}}                                          
                    </div>
                  </div>
                  
                  <div class="row{{ $errors->has('imagen') ? ' has-error is-focused' : '' }}">
                    <label  autocomplete="false" class="col-lg-2 control-label">Foto de Perfil</label>
                    <div class="col-lg-9">
                        {{Form::file('imagen',['placeholder'=>'Foto de Perfil'])}}                                          
                        @if ($errors->has('imagen'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('imagen') }}</strong>
                        </span>
                        @endif
                    </div>
                  </div>
                  <div class="form-group row{{ $errors->has('ciudad') ? ' has-error is-focused' : '' }}">
                    <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Ciudad</label>
                    <div class="col-lg-9">
                        {{Form::select('ciudad_id',$ciudadselect,null,['id'=>"select111", 'class'=>"form-control selectpicker", 'data-dropup-auto'=>"false",'requerid'])}}
                        @if ($errors->has('ciudad'))
                        <span class="help-block">
                            <strong>{{ $errors->first('ciudad') }}</strong>
                        </span>
                        @endif
                  </div>
                  </div>
                <div class="form-group row justify-content-end text-center">
                  <div class="col-lg-10">
                    <button type="submit" class="btn btn-raised btn-primary">Siguiente</button>
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