<aside id="s-main-menu" class="sidebar">
    <div class="smm-header">
        <i class="zmdi zmdi-long-arrow-left" data-ma-action="sidebar-close"></i>
    </div>

    <ul class="smm-alerts">
        <li class="active" data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-accounts"></i>
        </li>
        <li class="active" data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-notifications"></i>
        </li>
        <li class="active" data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-shopping-cart"></i>
        </li>
    </ul>

    <ul class="main-menu">
        <li class="{{ active('start-a') }}">
            <a href="{{route('start-a')}}"><i class="zmdi zmdi-home"></i> Inicio</a>
        </li>
        <li class="sub-menu {{ active('galeria') }}">
            <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-array"></i> Galeria de Imgenes</a>
            <ul>
                <li class="{{ active('panel/galeria/actividad') }}"><a href="{{route('galeria','actividad')}}">Actividades y Noticias</a></li>
                <li class="{{ active('panel/galeria/categoria') }}"><a href="{{route('galeria','categoria')}}">Categorias</a></li>
                <li class="{{ active('panel/galeria/empresa') }}"><a href="{{route('galeria','empresa')}}">Empresas</a></li>
                <li class="{{ active('panel/galeria/usuario') }}"><a href="{{route('galeria','usuario')}}">Usuarios</a></li>
            </ul>
        </li>
        <li class="sub-menu {{active(['institucion.*','actividades.*','noticias.*','equipos.*'])}}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Pagina Web</a>

            <ul>
                <li class="{{ active('institucion.*')}}"><a href="{{route('institucion.index')}}">Informacion</a></li>
                <li class="{{ active('actividades.*') }}"><a href="{{route('actividades.index')}}">Actividades</a></li>
                <li class="{{ active('noticias.*') }}"><a href="{{route('noticias.index')}}">Noticias</a></li>
                <li class="{{ active('equipos.*') }}"><a href="{{route('equipos.index')}}">Equipo</a></li>

            </ul>
        </li>
        <li class="sub-menu {{ active(['administradores.*','empresa.*','usuarios.*','empresas.*','email.*','pais.*','ciudades.*','categorias.*'])}}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Administracion</a>
            <ul>
                <li class="{{ active('administradores.*') }}"><a href="{{route('administradores.index')}}">Administradores</a></li>
                <li class="{{active('empresa.*') }}"><a href="{{route('empresa.index')}}">Administradores de Empresa</a></li>
                <li class="{{ active('usuarios.*') }}"><a href="{{route('usuarios.index')}}">Usuarios</a></li>
                <li class="{{ active('empresas.*') }}"><a href="{{route('empresas.index')}}">Empresas</a></li>
                <li class="{{ active('email.*') }}"><a href="{{route('email.index')}}">Correos</a></li>
                <li class="{{ active('pais.*') }}"><a href="{{route('pais.index')}}">Paises</a></li>
                <li class="{{ active('ciudades.*') }}"><a href="{{route('ciudades.index')}}">Ciudades</a></li>
                <li class="{{ active('categorias.*') }}"><a href="{{route('categorias.index')}}">Categorias</a></li>
            </ul>
        </li>
        <li class="sub-menu {{ active('panel/shop/*')}}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-menu"></i> Shop</a>

            <ul>
                <li class="{{ active('shopEmpresas')}}"><a href="{{route('shopEmpresas')}}">Todas las Empresas</a></li>
                <li class="sub-menu {{ active('shopEmpresasCategoria')}}">
                    <a href="#" data-ma-action="submenu-toggle">Por Categorias</a>
                    <ul>
                        @foreach ($categorias as $categoria)
                            <li class="{{active('panel/shop/empresas/categoria/'.$categoria->slug)}}"><a href="{{route('shopEmpresasCategoria',$categoria->slug)}}">{{ucwords($categoria->nombre)}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="sub-menu {{ active('shopEmpresasCiudad')}}">
                    <a href="#" data-ma-action="submenu-toggle">Por Ciudades</a>
                    <ul>
                        @foreach ($ciudades as $ciudad)
                            <li class="{{active('panel/shop/empresas/ciudad/'.$ciudad->slug)}}"><a href="{{route('shopEmpresasCiudad',$ciudad->slug)}}">{{$ciudad->nombre}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</aside>
