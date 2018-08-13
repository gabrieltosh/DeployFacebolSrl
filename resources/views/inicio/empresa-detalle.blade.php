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
      <div class="container container-full">
        <div class="ms-paper">
          <div class="row">

            <!-- col-lg-3 -->
            <div class="col-lg-12 ms-paper-content-container">
              <div class="ms-paper-content">
                <section class="ms-component-section">
                  <h2 class="section-title no-margin-top text-center text-warning"><strong>{{strtoupper($empresa->nombre)}}</strong></h2>
                  <p class="lead text-center">{{$empresa->promocion}}</p>
                  <div class="row">
                    <div class="col-md-6">

                      <img src="{{asset('imagen/empresas/'.$empresa->imagen)}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p ><strong class="text-info">Descripcion :</strong>{!!$empresa->descripcion!!}</p>
                            <p ><strong class="text-info">Promocion :</strong> {{$empresa->promocion}}</p>
                            <p><strong class="text-info">Horario :</strong> {{$empresa->horario}}</p>
                            <p ><strong class="text-info">Direccion :</strong> {{$empresa->direccion}}</p>
                            <p><strong class="text-info">Telefono :</strong> {{$empresa->telefono}}</p>
                            <p><strong class="text-info">Ciudad :</strong> {{$empresa->ciudad->nombre}}</p>
                            <a href="javascript:void(0)" class="btn btn-warning">
                              <i class="zmdi zmdi-star"></i> {{$empresa->descuento}}</a>
                          </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="card">
                          <div data-type="youtube" data-video-id="{{$empresa->video}}"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card">
                        <div id="map" style=" height: 290px; width: 100%">
                      </div>
                    </div>
                  </div>
                    </div>
                  </div>
                  <!-- card-code -->
                </section>
              </div>
              <!-- ms-paper-content -->
            </div>
            <!-- col-lg-9 -->
          </div>
          <!-- row -->
        </div>
        <!-- ms-paper -->
      </div>

            <!--ms-header-primary-->

    @include('sweetalert::alert')
    @include('inicio.partes.footer')
    <!-- ms-site-container -->
    @include('inicio.partes.menuL')
    @include('inicio.partes.styles.js')
    <script>
     function initMap() {
      // The location of Uluru
      var uluru = {lat: {{$empresa->latitud}}, lng: {{$empresa->longitud}}};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'),
          {zoom: 15, center: uluru});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map,title: '{{ucwords($empresa->nombre)}}', });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCX9LppRb03-Ew5z0smexbA3sNErxzTSkE&callback=initMap"
    async defer></script>
    </div>
    </body>
</html>