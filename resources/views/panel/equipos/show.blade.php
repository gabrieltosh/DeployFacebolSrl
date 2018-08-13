<div class="modal fade" id="modal-show-{{$equipo->id}}" style="display: none;">
        <div class="modal-dialog ">
            <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Datos de equipo</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header ch-alt">
                        <h2>Datos de {{ucwords($equipo->nombre)}}</h2>
                    </div>
                    <div class="card-body card-padding">
                        <div class="pmo-contact">
                            <ul>
                                <li class="ng-binding"><i class="zmdi zmdi-face"></i> 
                                    <strong>Facebook : </strong>{{$equipo->facebook}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-accounts"></i> 
                                    <strong>Twitter : </strong>{{ucwords($equipo->twitter)}}
                                </li>
                                <li>
                                    <i class="zmdi zmdi-pin-drop"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Instagram : </strong> {{$equipo->instagram}}
                                    </address>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Descripcion :</strong> {!!$equipo->descripcion!!}8
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