<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from agmstudio.io/themes/material-style/2.2.2/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 23:12:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Facebol</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="assets/img/favicon30f4.png?v=3">
    @include('inicio.partes.styles.css')
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="ms-site-container">
      <!-- Modal -->
     @include('inicio.partes.modal')
     @include('inicio.partes.navLogo')
     @include('inicio.partes.nav')
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-7">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="ms-hero-bg-primary ms-hero-img-mountain">
                <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Restablecer Contraseña</h2>
              </div>
              <div class="card-body">
                {{Form::open(['route'=>'passwordSave','method'=>'POST','class'=>'form-horizontal'])}}
                <form class="form-horizontal">
                  <fieldset class="container">
                    <div class="form-group row">
                      <label for="inputEmail" autocomplete="false" class="col-lg-3 control-label">Nueva Contraseña</label>
                      <div class="col-lg-9">
                        <input name="password" type="password" class="form-control" id="inputName" placeholder="Nueva Contraseña"> </div>
                        <input type="hidden" class="form-control" value="{{$dato}}" name="codigo">
                    </div>
                    <div class="form-group row">
                            <label for="inputEmail" autocomplete="false" class="col-lg-3 control-label">Repetir Contraseña</label>
                            <div class="col-lg-9">
                              <input type="password" class="form-control" id="inputName" placeholder="Repetir Contraseña"> </div>
                          </div>
                    <div class="form-group row justify-content-end">
                      <div class="col-lg-10">
                        <button type="submit" class="btn btn-raised btn-primary">Restablecer</button>
                      </div>
                    </div>
                  </fieldset>
                {{Form::close()}}
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-body">
                <div class="text-center mb-2">
                  <span class="ms-logo ms-logo-sm mr-1">F</span>
                  <h3 class="no-m ms-site-title">ace
                    <span>Bol</span>
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> {{$institucion->direccion}}</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> La Paz / Bolivia</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:{{$institucion->email}}">{{$institucion->email}}</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>{{$institucion->celular}} </p>
                  <p>
                    <i class="color-success-light fa fa-fax mr-1"></i> {{$institucion->telefono}} </p>
                </address>
              </div>
            </div>
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="zmdi zmdi-map"></i>Map</h3>
              </div>
              <iframe width="100%" height="340" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48342.06480344582!2d-73.980069429762!3d40.775680208459505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2sCentral+Park!5e0!3m2!1sen!2sus!4v1491233314840"></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
      @include('inicio.partes.footer')
      <!-- ms-site-container -->
      @include('inicio.partes.menuL')
   @include('inicio.partes.styles.js')
    </div>
  </body>

<!-- Mirrored from agmstudio.io/themes/material-style/2.2.2/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 23:12:15 GMT -->
</html>