@extends('panel.template-table')
@section('contenido')
 {!!Form::model($empresa,['route'=>['empresas.update',$empresa->id],'method'=>'PUT','id'=>'formulario','files'=>true])!!}
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
                    <a href="{{route('empresas.index')}}" class="btn btn-default"  style="margin-top: 5px;"><i class="zmdi zmdi-chevron-left"></i> Cancelar</a>
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
                          {!!Form::select('usuario_id',$usuarios,null,['class'=>'chosen','placeholder'=>$empresa->usuario_id])!!}
                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-edit"></i></span>
                      <div class="fg-line">
                          {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre de la Empresa'])!!}
                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-pin-drop"></i></span>
                      <div class="fg-line">
                          <div class="select">
                              {!!Form::select('ciudad_id',$ciudadess,null,['class'=>'chosen','placeholder'=>$empresa->ciudad_id])!!}
                          </div>
                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-collection-bookmark"></i></span>
                      <div class="fg-line">
                          <div class="select">
                              {!!Form::select('categoria_id',$categoriass,null,['class'=>'chosen','placeholder'=>$empresa->categoria_id])!!}
                          </div>
                      </div>
                  </div>

                  <br>
              </div>
                  <div class="col-sm-4">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-timer"></i></span>
                      <div class="fg-line">
                          {!!Form::text('horario',null,['class'=>'form-control','placeholder'=>'Horarios de Atencion'])!!}
                      </div>
                  </div>

                  <br>

                  <div class="input-group ">
                      <span class="input-group-addon"><i class="zmdi zmdi-flash"></i></span>
                      <div class="fg-line">
                          {!!Form::text('descuento',null,['class'=>'form-control','placeholder'=>'Descuento'])!!}
                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-flash"></i></span>
                      <div class="fg-line">
                          {!!Form::text('promocion',null,['class'=>'form-control','placeholder'=>'Promocion'])!!}

                      </div>
                  </div>

                  <br>

                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                      <div class="fg-line">
                          {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Telefono'])!!}
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                      <div class="fg-line">
                          <div class="select">
                              {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Correo Electronico'])!!}
                          </div>
                      </div>
                  </div>

                  <br>
                   <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-pin-drop"></i></span>
                      <div class="fg-line">
                          <div class="select">
                              {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Direccion de la Empresa'])!!}
                          </div>
                      </div>
                  </div>

                  <br>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-facebook-box"></i></span>
                      <div class="fg-line">
                          <div class="select">
                              {!!Form::text('facebook',null,['class'=>'form-control','placeholder'=>'Direccion de Facebook'])!!}
                          </div>
                      </div>
                  </div>

                  <br>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-rss"></i></span>
                      <div class="fg-line">
                          <div class="select">
                              {!!Form::text('web',null,['class'=>'form-control','placeholder'=>'Direccion Web'])!!}
                          </div>
                      </div>
                  </div>

                  <br>

              </div>
              </div>
              <div class="row">
                  <div class="col-sm-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-youtube-play"></i></span>
                      <div class="fg-line">
                          <div class="select">
                              {!!Form::text('video',null,['class'=>'form-control','placeholder'=>'Link de video de la Empresa'])!!}
                          </div>
                      </div>
                  </div>

                  <br>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-image"></i></span>
                      <div class="fg-line">
                           <p class="f-500 c-black m-b-15"><strong>Imagen Actual :</strong> </p>
                          <img width="100px" height="100px" src="{{asset('imagen/empresas/'.$empresa->imagen)}}" alt="">
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-4">
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
                  <div class="col-sm-4">
                    <p><strong>Direccion en lat y long</strong></p>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-pin-drop"></i></span>
                      <div class="fg-line">
                          <div class="select">
                              {!!Form::text('latitud',null,['class'=>'form-control','placeholder'=>'Latitud'])!!}
                          </div>
                      </div>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-pin-drop"></i></span>
                      <div class="fg-line">
                          <div class="select">
                              {!!Form::text('longitud',null,['class'=>'form-control','placeholder'=>'Longitud'])!!}
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-1">
              </div>
              <div class="col-sm-10">
                <p><strong>Descripcion :</strong></p>
                 <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-comment-alt-text"></i></span>
                    <div class="fg-line">
                        {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion de la Empresa','rows'=>5])!!}
                    </div>
                </div>
                <br>
              </div>
              <div class="col-sm-1"></div>
            </div>
         </div>
{!!Form::close()!!}
@stop
@section('script')
	{!! JsValidator::formRequest('App\Http\Requests\RequestEmpresaUpdate','#formulario')!!}
  <script>
    $(document).ready(function(){
      CKEDITOR.replace( 'descripcion' );
    });
  </script>
@stop