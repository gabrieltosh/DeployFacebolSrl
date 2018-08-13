@extends('panel.template-table')
@section('contenido')
 <div class="card" id="profile-main">
    <div class="pm-overview c-overflow">
        <div class="pmo-pic">
            <div class="p-relative">
                <a href="#">
                    <img class="img-responsive" src="{{asset('imagen/institucion/'.$institucion->imagen)}}" alt="">
                </a>
                <a href="#" data-toggle="modal" data-target="#modal-logo" class="pmop-edit">
                    <i class="zmdi zmdi-camera"></i> <span class="hidden-xs">Editar Imagen</span>
                </a>
            </div>
            <div class="pmo-stat">
                <h4 class="m-0 c-white">Logo</h4>
            </div>
        </div>
        <div class="pmo-pic">
            <div class="p-relative">
                <a >
                    <img class="img-responsive" src="{{asset('imagen/institucion/'.$institucion->banner1)}}" alt="">
                </a>
               <a href="#" data-toggle="modal" data-target="#modal-banner1" class="pmop-edit">
                    <i class="zmdi zmdi-camera"></i> <span class="hidden-xs">Editar Imagen</span>
                </a>
            </div>
            <div class="pmo-stat">
                <h4 class="m-0 c-white">Imagen slider 1</h4>
            </div>
        </div>
        <div class="pmo-pic">
            <div class="p-relative">
                <a href="#">
                    <img class="img-responsive" src="{{asset('imagen/institucion/'.$institucion->banner2)}}" alt="">
                </a>
                <a href="#"  data-toggle="modal" data-target="#modal-banner2" class="pmop-edit">
                    <i class="zmdi zmdi-camera"></i> <span class="hidden-xs">Editar Imagen</span>
                </a>
            </div>
            <div class="pmo-stat">
                <h4 class="m-0 c-white">Imagen slider 2</h4>
            </div>
        </div>
         <div class="pmo-pic">
            <div class="p-relative">
                <a href="#">
                    <img class="img-responsive" src="{{asset('imagen/institucion/'.$institucion->banner3)}}" alt="">
                <a href="#"  data-toggle="modal" data-target="#modal-banner3" class="pmop-edit">
                    <i class="zmdi zmdi-camera"></i> <span class="hidden-xs">Editar Imagen</span>
                </a>
            </div>
            <div class="pmo-stat">
                <h4 class="m-0 c-white">Imagen slider 3</h4>
            </div>
        </div>
    </div>
    @include('panel.institucion.modals-imagen')
    <div class="pm-body clearfix">
        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-comment-alt m-r-5"></i> Frases Banner</h2>

                <ul class="actions">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a data-pmb-action="edit" href="#">Editar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {!!Form::open(['route'=>['updateDatos','frases'],'method'=>'POST','files'=>true])!!}
            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    <dl class="dl-horizontal">
                        <dt>Primera Frase</dt>
                        <dd>{{$institucion->frase1}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Segunda Frase</dt>
                        <dd>{{$institucion->frase2}}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Tercera Frase</dt>
                        <dd>{{$institucion->frase3}}</dd>
                    </dl>
                </div>

                <div class="pmbb-edit">
                	 <dl class="dl-horizontal">
                        <dt>Primera Frase</dt>
                        <dd>
                        	<div class="fg-line">
                        	{!!Form::textarea('frase1',$institucion->frase1,['class'=>'form-control','placeholder'=>'Primera Frase','rows'=>5])!!}
                        	</div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Segunda Frase</dt>
                        <dd>
                        	<div class="fg-line">
                        	{!!Form::textarea('frase2',$institucion->frase2,['class'=>'form-control','placeholder'=>'Segunda Frase','rows'=>5])!!}
                        	</div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Tercera Frase</dt>
                        <dd>
                        	<div class="fg-line">
                        	{!!Form::textarea('frase3',$institucion->frase3,['class'=>'form-control','placeholder'=>'Tercera Frase','rows'=>5])!!}
                        	</div>
                        </dd>
                    </dl>
                    <div class="m-t-30">
                    	<div class="text-center">
                        	<button data-pmb-action="reset" class="btn btn-default btn-sm">Cancelar</button>	
                        	<button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                    	</div>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
        </div>

        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-comment-alt m-r-5"></i> Quienes Somos</h2>

                <ul class="actions">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a data-pmb-action="edit" href="#">Editar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {!!Form::open(['route'=>['updateDatos','somos'],'method'=>'POST','files'=>true])!!}

            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    <dl class="dl-horizontal">
                        <dt>Titulo</dt>
                        <dd>{{$institucion->titulosomos}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Descripcion</dt>
                        <dd>{!!$institucion->qSomos!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Mision</dt>
                        <dd>{!!$institucion->mision!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Vision</dt>
                        <dd>{!!$institucion->vision!!}</dd>
                    </dl>
                </div>

                <div class="pmbb-edit">
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Titulo</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('titulosomos',$institucion->titulosomos,['class'=>'form-control','placeholder'=>'Titulo'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                       <dt class="p-t-10">Descripcion</dt>
                        <dd>
                          <div class="fg-line">
                        	{!!Form::textarea('qSomos',$institucion->qSomos,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
					<dl class="dl-horizontal">
                        <dt class="p-t-10">Mision</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::textarea('mision',$institucion->mision,['class'=>'form-control','placeholder'=>'Mision','rows'=>5])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Vision</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::textarea('vision',$institucion->vision,['class'=>'form-control','placeholder'=>'Vision','rows'=>5])!!}
                            </div>
                        </dd>
                    </dl>
                     <div class="m-t-30">
                    	<div class="text-center">
                        	<button data-pmb-action="reset" class="btn btn-default btn-sm">Cancelar</button>	
                        	<button class="btn btn-primary btn-sm">Guardar</button>
                    	</div>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
        </div>

        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-comment-alt m-r-5"></i> Trabaja con Nosotros</h2>

                <ul class="actions">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a data-pmb-action="edit" href="#">Editar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {!!Form::open(['route'=>['updateDatos','trabaja'],'method'=>'POST','files'=>true])!!}

            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    <dl class="dl-horizontal">
                        <dt>Titulo</dt>
                        <dd>{{$institucion->titulotrabaja}}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Descripcion</dt>
                        <dd>{!!$institucion->trabaja!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Video</dt>
                        <dd>{!!$institucion->imgtrabaja!!}</dd>
                    </dl>
                </div>

                <div class="pmbb-edit">
                   	<dl class="dl-horizontal">
                        <dt class="p-t-10">Titulo</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('titulotrabaja',$institucion->titulotrabaja,['class'=>'form-control','placeholder'=>'Titulo'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                       <dt class="p-t-10">Descripcion</dt>
                        <dd>
                          <div class="fg-line">
                        	{!!Form::textarea('trabaja',$institucion->trabaja,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
                     <dl class="dl-horizontal">
                       <dt class="p-t-10">Video</dt>
                        <dd>
                          <div class="fg-line">
                            {!!Form::text('imgtrabaja',$institucion->imgtrabaja,['class'=>'form-control','placeholder'=>'Id del Video'])!!}
                           </div>
                        </dd>
                    </dl>
					 <div class="m-t-30">
                    	<div class="text-center">
                        	<button data-pmb-action="reset" class="btn btn-default btn-sm">Cancelar</button>	
                        	<button class="btn btn-primary btn-sm">Guardar</button>
                    	</div>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}

        </div>
        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-comment-alt m-r-5"></i> Plan de Afiliacion</h2>

                <ul class="actions">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a data-pmb-action="edit" href="#">Editar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {!!Form::open(['route'=>['updateDatos','plan'],'method'=>'POST','files'=>true])!!}

            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    <dl class="dl-horizontal">
                        <dt>Titulo</dt>
                        <dd>{{$institucion->tituloplan}}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Descripcion</dt>
                        <dd>{!!$institucion->desplan!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Nombre Plan</dt>
                        <dd>{!!$institucion->nombreplan!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Precio en Bolivianos</dt>
                        <dd>{!!$institucion->bsprecio!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Precio en Dolares</dt>
                        <dd>{!!$institucion->susprecio!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Tipo de Pago</dt>
                        <dd>{!!$institucion->plan!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Primer Benefico</dt>
                        <dd>{!!$institucion->benplan1!!}</dd>
                    </dl>
                      <dl class="dl-horizontal">
                        <dt>Segundo Benefico</dt>
                        <dd>{!!$institucion->benplan2!!}</dd>
                    </dl>
                      <dl class="dl-horizontal">
                        <dt>Tercer Benefico</dt>
                        <dd>{!!$institucion->benplan3!!}</dd>
                    </dl>
                      <dl class="dl-horizontal">
                        <dt>Cuarto Benefico</dt>
                        <dd>{!!$institucion->benplan4!!}</dd>
                    </dl>
                      <dl class="dl-horizontal">
                        <dt>Quinto Benefico</dt>
                        <dd>{!!$institucion->benplan5!!}</dd>
                    </dl>
                </div>
                <div class="pmbb-edit">
                   	<dl class="dl-horizontal">
                        <dt class="p-t-10">Titulo</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('tituloplan',$institucion->tituloplan,['class'=>'form-control','placeholder'=>'Titulo'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                       <dt class="p-t-10">Descripcion</dt>
                        <dd>
                          <div class="fg-line">
                        	{!!Form::textarea('desplan',$institucion->desplan,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Nombre Plan</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('nombreplan',$institucion->nombreplan,['class'=>'form-control','placeholder'=>'Titulo'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Precio en Bolivianos</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('bsprecio',$institucion->bsprecio,['class'=>'form-control','placeholder'=>'Titulo'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Precio en Dolares</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('susprecio',$institucion->susprecio,['class'=>'form-control','placeholder'=>'Titulo'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Tipo de Pago</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('plan',$institucion->plan,['class'=>'form-control','placeholder'=>'Titulo'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Primer Beneficio</dt>
                        <dd>
                            <div class="fg-line">
                        	{!!Form::textarea('benplan1',$institucion->benplan1,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt class="p-t-10">Segundo Beneficio</dt>
                        <dd>
                            <div class="fg-line">
                        	{!!Form::textarea('benplan2',$institucion->benplan2,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt class="p-t-10">Tercer Beneficio</dt>
                        <dd>
                            <div class="fg-line">
                        	{!!Form::textarea('benplan3',$institucion->benplan3,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt class="p-t-10">Cuarto Beneficio</dt>
                        <dd>
                            <div class="fg-line">
                        	{!!Form::textarea('benplan4',$institucion->benplan4,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt class="p-t-10">Quinto Beneficio</dt>
                        <dd>
                            <div class="fg-line">
                        	{!!Form::textarea('benplan5',$institucion->benplan5,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
					 <div class="m-t-30">
                    	<div class="text-center">
                        	<button data-pmb-action="reset" class="btn btn-default btn-sm">Cancelar</button>	
                        	<button class="btn btn-primary btn-sm">Guardar</button>
                    	</div>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}

        </div>
         <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-comment-alt m-r-5"></i> Actividades</h2>

                <ul class="actions">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a data-pmb-action="edit" href="#">Editar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {!!Form::open(['route'=>['updateDatos','actividades'],'method'=>'POST','files'=>true])!!}

            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    <dl class="dl-horizontal">
                        <dt>Titulo</dt>
                        <dd>{{$institucion->tituloactividades}}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Descripcion</dt>
                        <dd>{!!$institucion->desactividades!!}</dd>
                    </dl>
                </div>

                <div class="pmbb-edit">
                   	<dl class="dl-horizontal">
                        <dt class="p-t-10">Titulo</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('tituloactividades',$institucion->tituloactividades,['class'=>'form-control','placeholder'=>'Titulo'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                       <dt class="p-t-10">Descripcion</dt>
                        <dd>
                          <div class="fg-line">
                        	{!!Form::textarea('desactividades',$institucion->desactividades,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
					 <div class="m-t-30">
                    	<div class="text-center">
                        	<button data-pmb-action="reset" class="btn btn-default btn-sm">Cancelar</button>	
                        	<button class="btn btn-primary btn-sm">Guardar</button>
                    	</div>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
			
        </div>
         <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-comment-alt m-r-5"></i> Noticias</h2>

                <ul class="actions">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a data-pmb-action="edit" href="#">Editar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {!!Form::open(['route'=>['updateDatos','noticias'],'method'=>'POST','files'=>true])!!}

            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    <dl class="dl-horizontal">
                        <dt>Titulo</dt>
                        <dd>{{$institucion->titulonoticias}}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Descripcion</dt>
                        <dd>{!!$institucion->desnoticias!!}</dd>
                    </dl>
                </div>

                <div class="pmbb-edit">
                   	<dl class="dl-horizontal">
                        <dt class="p-t-10">Titulo</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('titulonoticias',$institucion->titulonoticias,['class'=>'form-control','placeholder'=>'Titulo'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                       <dt class="p-t-10">Descripcion</dt>
                        <dd>
                          <div class="fg-line">
                        	{!!Form::textarea('desnoticias',$institucion->desnoticias,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
					 <div class="m-t-30">
                    	<div class="text-center">
                        	<button data-pmb-action="reset" class="btn btn-default btn-sm">Cancelar</button>	
                        	<button class="btn btn-primary btn-sm">Guardar</button>
                    	</div>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
			
        </div>
         <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-comment-alt m-r-5"></i> Empresa</h2>

                <ul class="actions">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a data-pmb-action="edit" href="#">Editar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {!!Form::open(['route'=>['updateDatos','empresa'],'method'=>'POST','files'=>true])!!}

            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    <dl class="dl-horizontal">
                        <dt>Titulo</dt>
                        <dd>{{$institucion->tituloempresa}}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Descripcion</dt>
                        <dd>{!!$institucion->desEmpresa!!}</dd>
                    </dl>
                </div>

                <div class="pmbb-edit">
                   	<dl class="dl-horizontal">
                        <dt class="p-t-10">Titulo</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('tituloempresa',$institucion->tituloempresa,['class'=>'form-control','placeholder'=>'Titulo'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                       <dt class="p-t-10">Descripcion</dt>
                        <dd>
                          <div class="fg-line">
                        	{!!Form::textarea('desEmpresa',$institucion->desEmpresa,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
					 <div class="m-t-30">
                    	<div class="text-center">
                        	<button data-pmb-action="reset" class="btn btn-default btn-sm">Cancelar</button>	
                        	<button class="btn btn-primary btn-sm">Guardar</button>
                    	</div>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
			
        </div>
         <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-comment-alt m-r-5"></i> Equipo</h2>

                <ul class="actions">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a data-pmb-action="edit" href="#">Editar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {!!Form::open(['route'=>['updateDatos','equipo'],'method'=>'POST','files'=>true])!!}

            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    <dl class="dl-horizontal">
                        <dt>Titulo</dt>
                        <dd>{{$institucion->tituloequipo}}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Descripcion</dt>
                        <dd>{!!$institucion->desequipo!!}</dd>
                    </dl>
                </div>

                <div class="pmbb-edit">
                   	<dl class="dl-horizontal">
                        <dt class="p-t-10">Titulo</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('tituloequipo',$institucion->tituloequipo,['class'=>'form-control','placeholder'=>'Titulo'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                       <dt class="p-t-10">Descripcion</dt>
                        <dd>
                          <div class="fg-line">
                        	{!!Form::textarea('desequipo',$institucion->desequipo,['class'=>'form-control','placeholder'=>'Descripcion','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
					 <div class="m-t-30">
                    	<div class="text-center">
                        	<button data-pmb-action="reset" class="btn btn-default btn-sm">Cancelar</button>	
                        	<button class="btn btn-primary btn-sm">Guardar</button>
                    	</div>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
			
        </div>
        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-comment-alt m-r-5"></i> Suscribir</h2>

                <ul class="actions">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a data-pmb-action="edit" href="#">Editar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {!!Form::open(['route'=>['updateDatos','suscribir'],'method'=>'POST','files'=>true])!!}

            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    <dl class="dl-horizontal">
                        <dt>Titulo</dt>
                        <dd>{{$institucion->titulosuscribir}}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Descripcion</dt>
                        <dd>{!!$institucion->dessuscribir!!}</dd>
                    </dl>
                </div>

                <div class="pmbb-edit">
                   	<dl class="dl-horizontal">
                        <dt class="p-t-10">Titulo</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('titulosuscribir',$institucion->titulosuscribir,['class'=>'form-control','placeholder'=>'Titulo Suscibir'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                       <dt class="p-t-10">Descripcion</dt>
                        <dd>
                          <div class="fg-line">
                        	{!!Form::textarea('dessuscribir',$institucion->dessuscribir,['class'=>'form-control','placeholder'=>'Descripcion Suscribir','rows'=>5])!!}
                           </div>
                        </dd>
                    </dl>
					 <div class="m-t-30">
                    	<div class="text-center">
                        	<button data-pmb-action="reset" class="btn btn-default btn-sm">Cancelar</button>	
                        	<button class="btn btn-primary btn-sm">Guardar</button>
                    	</div>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}

        </div>
        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-comment-alt m-r-5"></i> Contacto</h2>

                <ul class="actions">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a data-pmb-action="edit" href="#">Editar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {!!Form::open(['route'=>['updateDatos','contacto'],'method'=>'POST','files'=>true])!!}

            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    <dl class="dl-horizontal">
                        <dt>Direccion</dt>
                        <dd>{{$institucion->direccion}}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Celular</dt>
                        <dd>{!!$institucion->celular!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Telefono</dt>
                        <dd>{!!$institucion->telefono!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Correo Electronico</dt>
                        <dd>{!!$institucion->email!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Facebook</dt>
                        <dd>{!!$institucion->facebook!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Twitter</dt>
                        <dd>{!!$institucion->twitter!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Youtube</dt>
                        <dd>{!!$institucion->youtube!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Instagram</dt>
                        <dd>{!!$institucion->instagram!!}</dd>
                    </dl>
                     <dl class="dl-horizontal">
                        <dt>Google</dt>
                        <dd>{!!$institucion->google!!}</dd>
                    </dl>
                </div>

                <div class="pmbb-edit">
                   	<dl class="dl-horizontal">
                        <dt class="p-t-10">Direccion</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('direccion',$institucion->direccion,['class'=>'form-control','placeholder'=>'Direccion'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Celular</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('celular',$institucion->celular,['class'=>'form-control','placeholder'=>'Celular'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Telefono</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('telefono',$institucion->telefono,['class'=>'form-control','placeholder'=>'Telefono'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Correo Electronico</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('email',$institucion->email,['class'=>'form-control','placeholder'=>'Correo Electronico'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Facebook</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('facebook',$institucion->facebook,['class'=>'form-control','placeholder'=>'Facebook'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Twitter</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('twitter',$institucion->twitter,['class'=>'form-control','placeholder'=>'Twitter'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Youtube</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('youtube',$institucion->youtube,['class'=>'form-control','placeholder'=>'youtube'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Instagram</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('instagram',$institucion->instagram,['class'=>'form-control','placeholder'=>'Instagram'])!!}
                            </div>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt class="p-t-10">Google +</dt>
                        <dd>
                            <div class="fg-line">
                            	{!!Form::text('google',$institucion->google,['class'=>'form-control','placeholder'=>'Google +'])!!}
                            </div>
                        </dd>
                    </dl>
					 <div class="m-t-30">
                    	<div class="text-center">
                        	<button data-pmb-action="reset" class="btn btn-default btn-sm">Cancelar</button>	
                        	<button class="btn btn-primary btn-sm">Guardar</button>
                    	</div>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
            
        </div>
    </div>
</div>
@stop
@section('script')
  <script>
  	$(document).ready(function(){
      CKEDITOR.replace( 'qSomos' );
      CKEDITOR.replace( 'trabaja' );
      CKEDITOR.replace( 'benplan1' );
      CKEDITOR.replace( 'benplan2' );
      CKEDITOR.replace( 'benplan3' );
      CKEDITOR.replace( 'benplan4' );
      CKEDITOR.replace( 'benplan5' );
  	});
  </script>
@stop