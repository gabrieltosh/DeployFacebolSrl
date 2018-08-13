<div class="modal fade" id="modal-banner1" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Editar Imagen</h4>
        </div>
        {!! Form::open(['route'=>['updateImagen','banner1'],'method'=>'POST','files'=>true]) !!}
        <div class="modal-body">
        
             <div class="input-group">
                <span class="input-group-addon"><i class="zmdi zmdi-upload"></i></span>
                <div class="fg-line">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                        <div>
                            <span class="btn btn-info btn-file">
                                <span class="fileinput-new">Seleccionar otra Imagen</span>
                                <span class="fileinput-exists">Cambiar</span>
                                {!!Form::file('imagen')!!}
                            </span>
                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Quitar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info">Cambiar</button>
        </div>
        
        {!! Form::close() !!}
        
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-banner2" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Editar Imagen</h4>
        </div>
        {!! Form::open(['route'=>['updateImagen','banner2'],'method'=>'POST','files'=>true]) !!}
        <div class="modal-body">
        
             <div class="input-group">
                <span class="input-group-addon"><i class="zmdi zmdi-upload"></i></span>
                <div class="fg-line">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                        <div>
                            <span class="btn btn-info btn-file">
                                <span class="fileinput-new">Seleccionar otra Imagen</span>
                                <span class="fileinput-exists">Cambiar</span>
                                {!!Form::file('imagen')!!}
                            </span>
                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Quitar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info">Cambiar</button>
        </div>
        
        {!! Form::close() !!}
        
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-banner3" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Editar Imagen</h4>
        </div>
        {!! Form::open(['route'=>['updateImagen','banner3'],'method'=>'POST','files'=>true]) !!}
        <div class="modal-body">
        
             <div class="input-group">
                <span class="input-group-addon"><i class="zmdi zmdi-upload"></i></span>
                <div class="fg-line">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                        <div>
                            <span class="btn btn-info btn-file">
                                <span class="fileinput-new">Seleccionar otra Imagen</span>
                                <span class="fileinput-exists">Cambiar</span>
                                {!!Form::file('imagen')!!}
                            </span>
                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Quitar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info">Cambiar</button>
        </div>
        
        {!! Form::close() !!}
        
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-logo" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Editar Imagen</h4>
        </div>
        {!! Form::open(['route'=>['updateImagen','imagen'],'method'=>'POST','files'=>true]) !!}
        <div class="modal-body">
        
             <div class="input-group">
                <span class="input-group-addon"><i class="zmdi zmdi-upload"></i></span>
                <div class="fg-line">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                        <div>
                            <span class="btn btn-info btn-file">
                                <span class="fileinput-new">Seleccionar otra Imagen</span>
                                <span class="fileinput-exists">Cambiar</span>
                                {!!Form::file('imagen')!!}
                            </span>
                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Quitar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info">Cambiar</button>
        </div>
        
        {!! Form::close() !!}
        
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-imgtrabaja" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Editar Imagen</h4>
        </div>
        {!! Form::open(['route'=>['updateImagen','imgtrabaja'],'method'=>'POST','files'=>true]) !!}
        <div class="modal-body">
        
             <div class="input-group">
                <span class="input-group-addon"><i class="zmdi zmdi-upload"></i></span>
                <div class="fg-line">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                        <div>
                            <span class="btn btn-info btn-file">
                                <span class="fileinput-new">Seleccionar otra Imagen</span>
                                <span class="fileinput-exists">Cambiar</span>
                                {!!Form::file('imagen')!!}
                            </span>
                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Quitar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info">Cambiar</button>
        </div>
        
        {!! Form::close() !!}
        
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>