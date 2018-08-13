 <aside id="s-user-alerts" class="sidebar">
                <ul class="tab-nav tn-justified tn-icon m-t-10" data-tab-color="teal">
                    <li><a class="sua-messages" href="#sua-messages" data-toggle="tab"><i class="zmdi zmdi-accounts"></i></a></li>
                    <li><a class="sua-notifications" href="#sua-notifications" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
                    <li><a class="sua-tasks" href="#sua-tasks" data-toggle="tab"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade" id="sua-messages">
                        <ul class="sua-menu list-inline list-unstyled palette-Light-Blue bg">
                            <li style="color:white"><i class="zmdi zmdi-accounts"></i> Equipo</li>
                        </ul>

                        <div class="list-group lg-alt c-overflow">
                            @foreach ($team as $usuario)
                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="{{asset('imagen/usuarios/'.$usuario->imagen)}}" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">{{$usuario->nombre." ".$usuario->apellido}}</div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <a href="#" class="btn btn-float btn-danger m-btn" data-ma-action="sidebar-close">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                    </div>
                    <div class="tab-pane fade" id="sua-notifications">
                        <ul class="sua-menu list-inline list-unstyled palette-Orange bg">
                            <li style="color:white"><i class="zmdi zmdi-notifications"></i> Notificaciones</li>
                        </ul>

                        <div class="list-group lg-alt c-overflow">
                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="lgi-heading">David Villa Jacobs</div>
                                    <small class="lgi-text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                        </div>
                         <a href="#" class="btn btn-float btn-danger m-btn" data-ma-action="sidebar-close">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                    </div>
                    <div class="tab-pane fade" id="sua-tasks">
                        <ul class="sua-menu list-inline list-unstyled palette-Green-400 bg">
                            <li style="color:white"><i class="zmdi zmdi-shopping-cart"></i> Carrito de Compras</li>
                        </ul>

                        <div class="list-group lg-alt c-overflow">


                        </div>

                        <a href="#" class="btn btn-float btn-danger m-btn" data-ma-action="sidebar-close">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                    </div>
                </div>
            </aside>