<header class="ms-header ms-header-primary">
    <!--ms-header-primary-->
    <div class="container container-full">
      <div class="ms-title">
        <a href="{{route('inicio')}}">
          <img src="{{asset('imagen/institucion/'.$institucion->imagen)}}" alt="" width="200px" height="80px"> 
          <!-- <span class="ms-logo animated zoomInDown animation-delay-5">F</span>
          <h1 class="animated fadeInRight animation-delay-6">ace
            <span>Bol</span>
          </h1>-->
        </a>
      </div> 
      <div class="header-right">
        <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
          <i class="zmdi zmdi-account"></i>
        </a>
        <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10">
          <i class="zmdi zmdi-menu"></i>
        </a>
      </div>
    </div>
  </header>