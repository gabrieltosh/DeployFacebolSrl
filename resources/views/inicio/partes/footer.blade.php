<aside class="ms-footbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ms-footer-col">
          <div class="ms-footbar-block">
            <h3 class="ms-footbar-title">Menu</h3>
            <ul class="list-unstyled ms-icon-list three_cols">
              <li>
                <a href="{{route('inicio')}}">
                  <i class="zmdi zmdi-home"></i>Inicio</a>
              </li>
              <li>
                <a href="{{route('empresa')}}">
                  <i class="zmdi zmdi-edit"></i>Empresas</a>
              </li>
              <li>
                <a href="{{route('actividad')}}">
                  <i class="zmdi zmdi-case"></i>Actividades</a>
              </li>
              <li>
                <a href="{{route('noticia')}}">
                  <i class="zmdi zmdi-case"></i>Noticias</a>
              </li>
              <li>
                <a href="{{route('contactanos')}}">
                  <i class="zmdi zmdi-time"></i>Contactanos</a>
              </li>
            </ul>
          </div>
          <div class="ms-footbar-block">
            <h3 class="ms-footbar-title">{{$institucion->titulosuscribir}}</h3>
            <p class="">{{$institucion->dessuscribir}}</p>
            {{Form::open(['route'=>'suscribir','method'=>'POST'])}}
              <div class="form-group label-floating mt-2 mb-1">
                <div class="input-group ms-input-subscribe">
                  <label class="control-label" for="ms-subscribe">
                    <i class="zmdi zmdi-email"></i> Correo Electronico</label>
                  <input type="email" id="ms-subscribe" class="form-control" name="email"> </div>
              </div>
              {{Form::submit('Suscribir',['class'=>'ms-subscribre-btn'])}}
              
            {{Form::close()}}
          </div>
        </div>
        <div class="col-lg-4 col-md-5 ms-footer-col ms-footer-text-right">
          <div class="ms-footbar-block">
            <div class="ms-footbar-title">
              <span class="ms-logo ms-logo-white ms-logo-sm mr-1">F</span>
              <h3 class="no-m ms-site-title">ace
                <span>bol</span>
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
                <i class="color-success-light fa fa-fax mr-1"></i>{{$institucion->telefono}} </p>
            </address>
          </div>
          <div class="ms-footbar-block">
            <h3 class="ms-footbar-title">Redes Sociales</h3>
            <div class="ms-footbar-social">
              <a href="{{$institucion->facebook}}" class="btn-circle btn-facebook">
                <i class="zmdi zmdi-facebook"></i>
              </a>
              <a href="{{$institucion->twitter}}" class="btn-circle btn-twitter">
                <i class="zmdi zmdi-twitter"></i>
              </a>
              <a href="{{$institucion->youtube}}" class="btn-circle btn-youtube">
                <i class="zmdi zmdi-youtube-play"></i>
              </a>
              <br>
              <a href="{{$institucion->google}}" class="btn-circle btn-google">
                <i class="zmdi zmdi-google"></i>
              </a>
              <a href="{{$institucion->instagram}}" class="btn-circle btn-instagram">
                <i class="zmdi zmdi-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <footer class="ms-footer">
    <div class="container">
      <p>Copyright &copy; Material Style 2018</p>
    </div>
  </footer>
  <div class="btn-back-top">
    <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
      <i class="zmdi zmdi-long-arrow-up"></i>
    </a>
  </div>
</div>