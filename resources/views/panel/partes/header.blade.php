 <header id="header" class="media">
            <div class="pull-left h-logo">
                <a href="index-2.html" class="hidden-xs">
                    FaceBol SRL
                    <small>Hola {{ucwords(Auth::user()->nombre)}}!!</small>
                </a>

                <div class="menu-collapse" data-ma-action="sidebar-open" data-ma-target="main-menu">
                    <div class="mc-wrap">
                        <div class="mcw-line top palette-White bg"></div>
                        <div class="mcw-line center palette-White bg"></div>
                        <div class="mcw-line bottom palette-White bg"></div>
                    </div>
                </div>
            </div>

            <ul class="pull-right h-menu">
                <li class="hm-alerts" data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                    <a href="#">
                        <i class="hm-icon zmdi zmdi-accounts"></i>
                    </a>
                </li>
                <li class="hm-alerts" data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                    <a href="#">
                        <i class="hm-icon zmdi zmdi-notifications"></i>
                    </a>
                </li>

                <li class="dropdown hidden-xs">
                    <a data-toggle="dropdown" href="#"><i class="hm-icon zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <li class="hidden-xs">
                            <a data-action="fullscreen" href="#"><i class="zmdi zmdi-fullscreen"></i> Pantalla Completa</a>
                        </li>
                    </ul>
                </li>
                <li class="hm-alerts" data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                    <a href="#"><i class="hm-icon zmdi zmdi-shopping-cart"></i></a>
                </li>
                <li class="dropdown hm-profile">
                    <a data-toggle="dropdown" href="#">
                        <img src="{{asset('imagen/usuarios/'.Auth::user()->imagen)}}" alt="">
                    </a>

                    <ul class="dropdown-menu pull-right dm-icon">
                        <li>
                            <a href="#"><i class="zmdi zmdi-account"></i> Mi Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-time-restore"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </header>