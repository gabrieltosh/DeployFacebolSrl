@extends('panel.template-table')
@section('contenido')
 {!!Form::open(['route'=>'actividades.store','method'=>'POST','id'=>'formulario','files'=>true])!!}
    <div class="card">
        <div class="card-header">
           <div class="row">
            <div class="col-sm-6">
              <h2>Nuevo Registro</h2>
            </div>
            <div class="col-sm-6">
              <div class="pull-right">
                <div class="row">
                  <div class="col-sm-6"  style="margin-top: 5px;">
                    <a href="{{route('actividades.index')}}" class="btn btn-default"><i class="zmdi zmdi-chevron-left"></i> Cancelar</a>
                  </div>
                  <div class="col-sm-6" style="margin-top: 5px;">
                    <button type="submit" class="btn btn-primary">Guardar <i class="zmdi zmdi-chevron-right"></i></button>
                  </div>
                </div>
                <br>
              </div>
            </div>
           </div>
        </div>

          <div class="card-body card-padding">

              <div class="row">
                <div class="row">
                   <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-text-format"></i></span>
                        <div class="fg-line">
                            {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre de la actividad'])!!}
                        </div>
                    </div>
                    
                    <br>

                </div>
                  <div class="col-sm-4">
                   <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                        <div class="fg-line">
                            {!!Form::date('fecha',null,['class'=>'form-control','placeholder'=>'Fecha de Actividad'])!!}
                        </div>
                    </div>

                    <br>
                </div>
                <div class="col-sm-4">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-upload"></i></span>
                        <div class="fg-line">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Seleccionar Imagen</span>
                                        <span class="fileinput-exists">Cambiar</span>
                                        {!!Form::file('imagen')!!}
                                    </span>
                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Quitar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                  
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  
                 
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-border-color"></i></span>
                      <div class="fg-line">
                          {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','id'=>'editor'])!!}
                          
                      </div>
                  </div>

                  <br>
                </div>
              </div>
        </div>
    </div>
{!!Form::close()!!}
@stop
@section('script')
  {!! JsValidator::formRequest('App\Http\Requests\RequestActividadCreate','#formulario')!!}
  <script>
      CKEDITOR.replace( 'descripcion' );
  </script>
@stop