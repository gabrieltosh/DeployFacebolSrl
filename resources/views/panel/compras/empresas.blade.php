@extends('panel.template')
@section('contenido')
    <div class="card">
         <div class="action-header clearfix palette-Teal-400 bg">
            <div class="ah-label hidden-xs palette-White text">Empresas con Descuentos y/o Beneficios</div>
        </div>
        <div class="card-body card-padding">
            <div class="contacts clearfix row">
                @foreach ($empresas as $empresa)
                    <div class="col-sm-4 col-xs-12">
                        <a href="{{route('shopProductos',$empresa->slug)}}" class="ci-avatar">
                        <div class="c-item">
                                <img src="{{asset('imagen/empresas/'.$empresa->imagen)}}" alt="">
                                <div class="c-info">
                                    <strong>{{ucwords($empresa->nombre)}}</strong>
                                    <small>{!!$empresa->descripcion!!}</small>
                                </div>
                                <div class="c-footer">
                                    <button class="waves-effect" style="background-color:#144d66; color:white;"><i class="zmdi zmdi-person-add"></i> Mas Informacion</button>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="load-more">
                {{$empresas->render()}}
            </div>
        </div>
    </div>
@stop