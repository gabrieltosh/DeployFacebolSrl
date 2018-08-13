<!DOCTYPE html>
<html lang="es">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Facebol</title>
    @include('inicio.partes.meta')    
    
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
                <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Contacto</h2>
              </div>
              <div class="card-body">
                {{Form::open(['route'=>'email_post','method'=>'POST','class'=>'form-horizontal'])}}
                <form class="form-horizontal">
                  <fieldset class="container">
                    <div class="form-group row">
                      <label for="inputEmail" autocomplete="false" class="col-lg-3 control-label">Nombre</label>
                      <div class="col-lg-9">
                        <input type="text" name="nombre" class="form-control" id="inputName" placeholder="Nombre"> </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" autocomplete="false" class="col-lg-3 control-label">Correo</label>
                      <div class="col-lg-9">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Correo Electronico"> </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" autocomplete="false" class="col-lg-3 control-label">Asunto</label>
                      <div class="col-lg-9">
                        <input type="text" name="situacion"class="form-control" id="inputSubject" placeholder="Asunto"> </div>
                    </div>
                    <div class="form-group row">
                      <label for="textArea" class="col-lg-3 control-label">Mensaje</label>
                      <div class="col-lg-9">
                        <textarea class="form-control" name="mensaje"rows="3" id="textArea" placeholder="Tu Mensaje"></textarea>
                      </div>
                    </div>
                    <div class="form-group row justify-content-end">
                      <div class="col-lg-10">
                        <button type="submit" class="btn btn-raised btn-primary">Enviar</button>
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
              <iframe  height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJR6WCDMPfXpERgIgG3Pop2rE&key=AIzaSyCKisBs3MYGlziWimO-IyMEeJCzz4bQsLI" allowfullscreen></iframe>
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

</html>