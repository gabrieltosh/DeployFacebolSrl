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
    
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-md-offset-2">
            <div class="card animated fadeInUp animation-delay-7 color-primary withripple">
              <div class="card-body-big color-dark">
                <div class="text-center">
                  <h1 class="color-primary">{{\Session::get('title')}}</h1>
                  <p class="lead lead-sm">{{\Session::get('body')}}</p>
                  <a href="{{route('inicio')}}" class="btn btn-primary btn-raised">
                    <i class="zmdi zmdi-home"></i> Volver a la Pagina Principal</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    @include('inicio.partes.footer')
    <!-- ms-site-container -->
    @include('inicio.partes.menuL')
    @include('inicio.partes.styles.js')
    </div>
    </body>
</html>