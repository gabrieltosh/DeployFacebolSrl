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
    @include('inicio.partes.slider')
      <!-- ms-hero ms-hero-black -->
    
      @yield('contenido')

    @include('sweetalert::alert')
    @include('inicio.partes.footer')
    <!-- ms-site-container -->
    @include('inicio.partes.menuL')
    @include('inicio.partes.styles.js')
    </div>
    </body>
</html>