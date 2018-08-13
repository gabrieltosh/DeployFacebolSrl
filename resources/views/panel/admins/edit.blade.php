@extends('panel.template-table')
@section('contenido')
 {!!Form::model($admin,['route'=>['administradores.update',$admin->id],'method'=>'PUT','id'=>'formulario','files'=>true])!!}
    <div class="card">
        <div class="card-header">
           <div class="row">
           	<div class="col-sm-6">
           		<h2>Editar Registro</h2>
           	</div>
              <div class="col-sm-6">
              <div class="pull-right">
                <div class="row">
                  <div class="col-sm-6">
                    <a href="{{route('administradores.index')}}" class="btn btn-default"  style="margin-top: 5px;"><i class="zmdi zmdi-chevron-left"></i> Cancelar</a>
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
                      <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                      <div class="fg-line">
                          {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellidos'])!!}
                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-account-box-phone"></i></span>
                      <div class="fg-line">
                          {!!Form::number('ci',null,['class'=>'form-control','placeholder'=>'Carnet de Identidad'])!!}

                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                      <div class="fg-line">
                          {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Correo Electronico'])!!}
                      </div>
                  </div>
              </div>
                  <div class="col-sm-4">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                      <div class="fg-line">
                          {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Direccion'])!!}
                      </div>
                  </div>

                  <br>

                  <div class="input-group ">
                      <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                      <div class="fg-line">
                          {!!Form::number('celular',null,['class'=>'form-control','placeholder'=>'Celular'])!!}
                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
                      <div class="fg-line">
                          {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña'])!!}

                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
                      <div class="fg-line">
                          {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirmar Contraseña'])!!}
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-pin-drop"></i></span>
                      <div class="fg-line">
                          <div class="select">
                              {!!Form::select('ciudad_id',$ciudadess,null,['class'=>'chosen','placeholder'=>$admin->ciudad_id])!!}
                          </div>
                      </div>
                  </div>

                  <br>

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
              </div>
              <div class="row">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="zmdi zmdi-accounts-list-alt"></i></span>
                          <div class="fg-line">
                               <div class="col-sm-12 m-b-15">
                                  <p class="f-500 c-black m-b-15">Lider de equipo (codigo facebol)</p>
                                   @if($admin->user_id!=null)
                                    {!!Form::select('user_id',$admins,null,['class'=>'chosen','data-placeholer'=>'Lider de Equipo','placeholder'=>$admin->user_id])!!}
                                  @else
                                    {!!Form::select('user_id',$admins,null,['class'=>'chosen','data-placeholer'=>'Lider de Equipo','placeholder'=>'No tiene Equipo'])!!}
                                  @endif
                              </div>
                          </div>

                      </div>
                  </div>
                  <div class="col-sm-4">
                       <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-upload"></i></span>
                      <div class="fg-line">
                           <p class="f-500 c-black m-b-15">Imagen Actual : </p>
                          <img width="100px" height="100px" src="{{asset('imagen/usuarios/'.$admin->imagen)}}" alt="">
                      </div>
                  </div>
                  </div>
              </div>

        </div>
    </div>
{!!Form::close()!!}
@stop
@section('script')
	{!! JsValidator::formRequest('App\Http\Requests\RequestUsuarioUpdate','#formulario')!!}
@stop