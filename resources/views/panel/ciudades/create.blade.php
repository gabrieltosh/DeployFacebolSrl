@extends('panel.template-table')
@section('contenido')
 {!!Form::open(['route'=>'ciudades.store','method'=>'POST','id'=>'formulario','files'=>true])!!}
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
                    <a href="{{route('ciudades.index')}}" class="btn btn-default"  style="margin-top: 5px;"><i class="zmdi zmdi-chevron-left"></i> Cancelar</a>
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
                          {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre de Categoria'])!!}
                      </div>
                  </div>

                  <br>
              </div>
              <div class="col-sm-4">
                   <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-pin-drop"></i></span>
                        <div class="fg-line">
                            <div class="select">
                                {!!Form::select('pais_id',$paises,null,['class'=>'chosen'])!!}
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
  {!! JsValidator::formRequest('App\Http\Requests\RequestCiudadCreate','#formulario')!!}
@stop