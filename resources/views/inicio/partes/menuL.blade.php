<div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
    <div class="sb-slidebar-container">
      <header class="ms-slidebar-header">
        <div class="ms-slidebar-login">
          <a href="javascript:void(0)" class="withripple">
            <i class="zmdi zmdi-account"></i> Login</a>
          <a href="javascript:void(0)" class="withripple">
            <i class="zmdi zmdi-account-add"></i> Register</a>
        </div>
        <div class="ms-slidebar-title">
          <form class="search-form">
            <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
            <label for="search-box-slidebar">
              <i class="zmdi zmdi-search"></i>
            </label>
          </form>
          <div class="ms-slidebar-t">
            <span class="ms-logo ms-logo-sm">F</span>
            <h3>ace
              <span>Bol</span>
            </h3>
          </div>
        </div>
      </header>
      <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
        <li>
          <a class="link" href="{{route('inicio')}}">
          <i class="zmdi zmdi-city-alt"></i> Inicio</a>
        </li>
        <li>
            <a class="link" href="{{route('empresa')}}">
            <i class="zmdi zmdi-city-alt"></i> Todas las Empresas</a>
        </li>
        <li class="card" role="tab" id="sch4">
          <a class="collapsed" role="button" data-toggle="collapse" href="#sc4" aria-expanded="false" aria-controls="sc4">
            <i class="zmdi zmdi-edit"></i> Empresas por Categoria </a>
          <ul id="sc4" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch4" data-parent="#slidebar-menu">
            @foreach($categorias as $categoria)
            <li>
              <a href="{{route('categoria',$categoria->slug)}}">{{$categoria->nombre}}</a>
            </li>
            @endforeach
            <li>
          </ul>
        </li>
        <li class="card" role="tab" id="sch5">
          <a class="collapsed" role="button" data-toggle="collapse" href="#sc5" aria-expanded="false" aria-controls="sc5">
            <i class="zmdi zmdi-edit"></i> Empresas por Ciudad </a>
          <ul id="sc5" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch5" data-parent="#slidebar-menu">
            @foreach($ciudades as $ciudad)
            <li>
              <a href="{{route('ciudad',$ciudad->slug)}}">{{ucwords($ciudad->nombre)}}</a>
            </li>
            @endforeach
            <li>
          </ul>
        </li>
        <li>
            <a class="link" href="{{route('actividad')}}">
            <i class="zmdi zmdi-toys"></i> Actividades</a>
        </li>
        <li>
            <a class="link" href="{{route('noticia')}}">
            <i class="zmdi zmdi-collection-image-o"></i> Noticias</a>
        </li>
        <li>
            <a class="link" href="{{route('equipo')}}">
            <i class="zmdi zmdi-accounts-alt"></i> Nuestro Equipo</a>
        </li>
        <li>
            <a class="link" href="{{route('contactanos')}}">
            <i class="zmdi zmdi-accounts-alt"></i> Contactanos</a>
        </li>
        
      </ul>
    </div>
  </div>