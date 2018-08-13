<div class="modal fade" id="modal-show-{{$usuario->id}}" style="display: none;">
        <div class="modal-dialog ">
            <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Datos de Usuario</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header ch-alt">
                        <h2>Datos Personales de {{ucwords($usuario->nombre." ".$usuario->apellido)}}</h2>
                    </div>
                    <div class="card-body card-padding">
                        <div class="pmo-contact">
                            <ul>
                                <li class="ng-binding"><i class="zmdi zmdi-face"></i> 
                                    <strong>Carnet de Identidad : </strong>{{$usuario->ci}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-accounts"></i> 
                                    <strong>Tipo : </strong>{{ucwords($usuario->tipo)}}
                                </li>
                                <li>
                                    <i class="zmdi zmdi-pin-drop"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Ciudad : </strong> {{$usuario->ciudad->nombre}}
                                    </address>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Direccion :</strong> {{$usuario->direccion}}
                                    </address>
                                </li>
                                 <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Codigo de Facebol :</strong> {{$usuario->cod_face}}
                                    </address>
                                </li>   
                                <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Lider de Equipo :</strong> 
                                        @if($usuario->user_id != null)
                                            {{ucwords($usuario->user->nombre." ".$usuario->user->apellido)}}
                                        @else
                                            No Tiene Lider
                                        @endif
                                    </address>
                                </li>
                            </ul>
                        </div>

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