<div class="modal fade" id="modal-show-{{$admin->id}}" style="display: none;">
        <div class="modal-dialog ">
            <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Datos de admin</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header ch-alt">
                        <h2>Datos Personales de {{ucwords($admin->nombre." ".$admin->apellido)}}</h2>
                    </div>
                    <div class="card-body card-padding">
                        <div class="pmo-contact">
                            <ul>
                                <li class="ng-binding"><i class="zmdi zmdi-face"></i> 
                                    <strong>Carnet de Identidad : </strong>{{$admin->ci}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-accounts"></i> 
                                    <strong>Tipo : </strong>{{ucwords($admin->tipo)}}
                                </li>
                                <li>
                                    <i class="zmdi zmdi-pin-drop"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Ciudad : </strong> {{$admin->ciudad->nombre}}
                                    </address>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Direccion :</strong> {{$admin->direccion}}
                                    </address>
                                </li>
                                 <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Codigo de Facebol :</strong> {{$admin->cod_face}}
                                    </address>
                                </li>
                                   <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Lider de Equipo :</strong> 
                                        @if($admin->user_id != null)
                                            {{ucwords($admin->user->nombre." ".$admin->user->apellido)}}
                                        @else
                                            No Tiene Lider
                                        @endif
                                    </address>
                                </li>
                            </ul>
                        </div>

                        <a class="pmo-map" href="#">
                            <img src="img/demo/map.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </div>