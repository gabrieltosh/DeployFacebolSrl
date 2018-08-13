<div class="modal fade" id="modal-show-{{$empresa->id}}" style="display: none;">
        <div class="modal-dialog ">
            <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Datos de empresa</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header ch-alt">
                        <h2>Datos de la Empresa {{ucwords($empresa->nombre)}}</h2>
                    </div>
                    <div class="card-body card-padding">
                        <div class="pmo-contact">
                            <ul>
                                <li class="ng-binding"><i class="zmdi zmdi-face"></i> 
                                    <strong>Usuario Administrador : </strong>{{ucwords($empresa->usuario->nombre." ".$empresa->usuario->apellido)}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-collection-bookmark"></i> 
                                    <strong>Categoria : </strong>{{ucwords($empresa->categoria->nombre)}}
                                </li>
                                <li>
                                    <i class="zmdi zmdi-comment-alt-text"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Descripcion : </strong> {!!$empresa->descripcion!!}
                                    </address>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-timer"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Horario :</strong> {{$empresa->horario}}
                                    </address>
                                </li>
                                 <li>
                                    <i class="zmdi zmdi-flash"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Descuento :</strong> {{$empresa->descuento}}
                                    </address>
                                </li>   
                                <li>
                                    <i class="zmdi zmdi-flash"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Promocion :</strong> 
                                            {{ucwords($empresa->promocion)}}
                                    </address>
                                </li>
                                  <li>
                                    <i class="zmdi zmdi-facebook-box"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Facebook :</strong> 
                                            {{ucwords($empresa->facebook)}}
                                    </address>
                                </li>
                                  <li>
                                    <i class="zmdi zmdi-rss"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Pagina Web :</strong> 
                                            {{ucwords($empresa->web)}}
                                    </address>
                                </li>
                                  <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Direccion :</strong> 
                                            {{ucwords($empresa->direccion)}}
                                    </address>
                                </li>
                                  <li>
                                    <i class="zmdi zmdi-youtube-play"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Video :</strong> 
                                            {{ucwords($empresa->video)}}
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