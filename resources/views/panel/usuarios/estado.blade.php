<div class="modal fade" id="modal-estado-{{$usuario->id}}" style="display: none;">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Cambiar Estado</h4>
    </div>
    <div class="modal-body">
        <p>¿ Esta seguro en cambiar el estado de <strong>{{ucwords($usuario->nombre." ".$usuario->apellido)}}</strong> ?</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        <a href="{{route('usuarios.show',$usuario->id)}}" class="btn btn-primary">Aceptar</a>
    </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>