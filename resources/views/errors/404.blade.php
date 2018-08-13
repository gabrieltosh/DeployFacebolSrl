
<!DOCTYPE html>
<html lang="es">
  
<!-- Mirrored from agmstudio.io/themes/material-style/2.2.2/page-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 23:12:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Facebol</title>
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
    <div class="bg-full-page bg-primary back-fixed">
      <div class="mw-500 absolute-center">
        <div class="card animated zoomInUp animation-delay-7 color-primary withripple">
          <div class="card-body">
            <div class="text-center color-dark">
              <h1 class="color-primary text-big">Error 404</h1>
              <h2>La pagina no fue encontrada</h2>
              <p class="lead lead-sm">No se puedo encontrar el enlace que esta buscando.
                <br>Si el error persiste contactase con nosotros.</p>
              <a href="{{route('inicio')}}" class="btn btn-primary btn-raised">
                <i class="zmdi zmdi-home"></i> Ir a pagina principal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   @include('inicio.partes.styles.js')
  </body>

<!-- Mirrored from agmstudio.io/themes/material-style/2.2.2/page-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 23:12:19 GMT -->
</html>