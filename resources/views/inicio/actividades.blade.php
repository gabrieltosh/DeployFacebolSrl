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
      <div class="ms-hero-page ms-hero-img-meeting ms-hero-bg-primary ms-bg-fixed mb-4">
        <div class="container">
          <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">{{$institucion->tituloactividades}}</h1>
            <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">{{$institucion->desactividades}}</p>s
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <ul class="ms-timeline">
              @foreach($actividades as $actividad)
                @if($actividad->tipo == 'actividad')
                @if($actividad->activo==1)
                  <li class="ms-timeline-item wow materialUp">
                    <div class="ms-timeline-date">
                      <time class="timeline-time" datetime="">{{$actividad->año}}
                        <span>{{$actividad->mes}}</span>
                        <span>{{$actividad->dia}}</span>
                      </time>
                      <i class="ms-timeline-point bg-primary"></i>
                     </div>
                    <div class="card card-warning">
                      <div class="card-header">
                        <h3 class="card-title text-center">{{$actividad->nombre}}</h3>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12">
                            <p>{!!$actividad->descripcion!!}</p>
                          </div>
                          <div class="col-md-12 text-center">
                            <img src="{{asset('imagen/actividades/'.$actividad->imagen)}}" alt="" class="img-fluid mb-2" width="350px" height="250px"> </div>
                          
                        </div>
                      </div>
                    </div>
                  </li>
                  @endif
                @endif
              @endforeach
            </ul>
          </div>
          <div class="col-lg-4">
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
              <iframe  height="400" width="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJR6WCDMPfXpERgIgG3Pop2rE&key=AIzaSyCKisBs3MYGlziWimO-IyMEeJCzz4bQsLI" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
      @include('inicio.partes.footer')
    </div>
    <!-- ms-site-container -->
    @include('inicio.partes.menuL')
   @include('inicio.partes.styles.js')
  </body>
</html>