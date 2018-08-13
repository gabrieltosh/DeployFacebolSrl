@extends('panel.template-table')
@section('contenido')
 {!!Form::open(['route'=>'productos.store','method'=>'POST','id'=>'formulario','files'=>true])!!}
    <div class="card" id="form">
        <div class="card-header">
           <div class="row">
           	<div class="col-sm-6">
           		<h2>Nuevo Registro</h2>
           	</div>
           	<div class="col-sm-6">
           		<div class="pull-right">
           			<div class="row">
           				<div class="col-sm-6">
           					<a href="{{route('productos.index')}}" class="btn btn-default"  style="margin-top: 5px;"><i class="zmdi zmdi-chevron-left"></i> Cancelar</a>
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
                      <span class="input-group-addon"><i class="zmdi zmdi-format-color-text"></i></span>
                      <div class="fg-line">
                          <label for=""><strong>Nombre del Producto :</strong></label>
                          {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Producto'])!!}
                      </div>
                  </div>
                  <br>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-format-color-text"></i></span>
                      <div class="fg-line">
                          <label for=""><strong>Precio del Producto :</strong></label>
                          {!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'Precio del Producto(Especifique)'])!!}
                      </div>
                  </div>
                  <br>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-comment-alt-text"></i></span>
                      <div class="fg-line">
                          <label for=""><strong>Tipo de Producto :</strong></label>
                            <select v-model="selected" name="tipo" class="form-control">
                                <option    value="normal">Normal</option>
                                <option value="descuento">Descuento</option>
                                <option value="comision">Comision</option>
                                <option value="servicio">Descuento y Comision</option>
                            </select>
                      </div>
                  </div>
                  <br>
                </div>
                <div class="col-sm-4">
                   <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-comment-alt-text"></i></span>
                      <div class="fg-line">
                          <label for=""><strong>Descripcion :</strong></label>
                          {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                      </div>
                  </div>
                  <br>
                    <div class="input-group" v-if="selected === 'descuento' || selected === 'servicio'">
                      <span class="input-group-addon"><i class="zmdi zmdi-format-color-text"></i></span>
                      <div class="fg-line">
                          <label for=""><strong>Descuento del Producto :</strong></label>
                          {!!Form::text('descuento',null,['class'=>'form-control','placeholder'=>'Descuento del Producto'])!!}
                      </div>
                  </div>
                  <br>
                     <div class="input-group" v-if="selected === 'comision' || selected === 'servicio'">
                      <span class="input-group-addon"><i class="zmdi zmdi-format-color-text"></i></span>
                      <div class="fg-line">
                          <label for=""><strong>Comision del Producto</strong></label>
                          {!!Form::text('comision',null,['class'=>'form-control','placeholder'=>'Comision del Producto'])!!}
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
              </div>
        </div>
    </div>
{!!Form::close()!!}
@stop
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\RequestProductoCreate','#formulario')!!}

    <script>
     new Vue({
        el : '#form',
        data:{
            selected:'',
        }
     })
    </script>
@stop