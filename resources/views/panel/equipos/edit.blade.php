@extends('panel.template-table')
@section('contenido')
 {!!Form::model($equipo,['route'=>['equipos.update',$equipo->id],'method'=>'PUT','id'=>'formulario','files'=>true])!!}
    <div class="card">
        <div class="card-header">
           <div class="row">
           	<div class="col-sm-6">
           		<h2>Nuevo Registro</h2>
           	</div>
              <div class="col-sm-6">
              <div class="pull-right">
                <div class="row">
                  <div class="col-sm-6">
                    <a href="{{route('equipos.index')}}" class="btn btn-default"  style="margin-top: 5px;"><i class="zmdi zmdi-chevron-left"></i> Cancelar</a>
                  </div>
                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary"  style="margin-top: 5px;">Guardar <i class="zmdi zmdi-chevron-right"></i></button>
                  </div>
                </div>
                <br>
              </div>
            </div>
           </div>
        </div>

        <div class="card-body card-padding">

            <div class="row">
               <div class="col-sm-4">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                      <div class="fg-line">
                          {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombres'])!!}
                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-account-box-mail"></i></span>
                      <div class="fg-line">
                          {!!Form::text('cargo',null,['class'=>'form-control','placeholder'=>'Cargo'])!!}
                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-facebook"></i></span>
                      <div class="fg-line">
                          {!!Form::text('facebook',null,['class'=>'form-control','placeholder'=>'Facebook'])!!}
                          
                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-twitter"></i></span>
                      <div class="fg-line">
                          {!!Form::text('twitter',null,['class'=>'form-control','placeholder'=>'Twitter'])!!}
                      </div>
                  </div>
              </div>
                  <div class="col-sm-4">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-instagram"></i></span>
                      <div class="fg-line">
                          {!!Form::text('instagram',null,['class'=>'form-control','placeholder'=>'Instagram'])!!}
                      </div>
                  </div>

                  <br>

                  <div class="input-group ">
                      <span class="input-group-addon"><i class="zmdi zmdi-comment-text"></i></span>
                      <div class="fg-line">
                          {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                      </div>
                  </div>

                  <br>
              </div>
              <div class="col-sm-4">

                   <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-image"></i></span>
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
                   <div class="text-center">
                           <p class="f-500 c-black m-b-15"><strong>Imagen Actual : </strong></p>

                      <img src="{{asset('imagen/equipos/'.$equipo->imagen)}}" alt="" width="160px" height="150px">
                      
                    </div>
              </div>
              </div>
        </div>
    </div>
{!!Form::close()!!}
@stop
@section('script')
	{!! JsValidator::formRequest('App\Http\Requests\RequestEquipoUpdate','#formulario')!!}
@stop