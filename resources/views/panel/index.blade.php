@extends('panel.template')
@section('contenido')
<!-- <div id="c-grid" class="clearfix" data-columns>
    <div class="card c-dark palette-Light-Blue bg">
        <div class="card-header">
            <h2>Website Impressions <small>Consectetur Ultricies Porta Fringilla</small></h2>
        </div>
        <div class="card-body card-padding">
            <h2 class="m-t-0 m-b-15 c-white">
                <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
                987,453
            </h2>
        </div>
    </div>

   <div class="card c-dark palette-Blue-Grey bg">
        <div class="card-header">
            <h2>Ventas Totales <small>Purus Malesuada Consectetur</small></h2>
        </div>
        <div class="card-body card-padding">
            <h2 class="m-t-0 m-b-15 c-white">
                <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
                Bs 0
            </h2>
       < </div>
    </div>
</div>-->

<section id="content">
    <div class="container" id="wall">

        <div class="row">
            <div class="col-md-8">
                {{Form::open(['route'=>'publicaciones.store','method'=>'POST','files'=>TRUE])}}
                <div class="card wall-posting">
                    <div class="card-body card-padding">
                        <textarea class="wp-text" data-auto-size placeholder="Escriba algo..." name="descripcion"></textarea>
                        <div class="tab-content p-0">
                            <div class="wp-media tab-pane" id="wpm-image">
                                <label for=""><strong>Subir Imagen :</strong></label>
                                    <input type="file" name="imagen">
                            </div>
                            <div class="wp-media tab-pane" id="wpm-link">
                                <label for=""><strong>Subir Documento :</strong></label>
                                    <input type="file" name="archivo">
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled clearfix wpb-actions">
                        <li class="wpba-attrs">
                            <ul class="list-unstyled list-inline">
                                <li><a data-wpba="image" data-toggle="tab" href="#" data-target="#wpm-image"><i class="zmdi zmdi-image"></i></a></li>
                                <li><a data-wpba="link" data-toggle="tab" href="#" data-target="#wpm-link"><i class="zmdi zmdi-link"></i></a></li>
                            </ul>
                        </li>

                        <button class="btn btn-primary btn-sm btn-icon" type="submit" ><i class="zmdi zmdi-check"></i></button>
                    </ul>
                </div>
                {!!Form::close()!!}
                <div class="card" v-for="publicacion in publicaciones">
                    <div class="card-header">
                        <div class="media">
                            <div class="pull-left">
                                <img class="avatar-img a-lg" v-bind:src="'{{asset('imagen/usuarios')}}/' + publicacion.user.imagen" alt="">

                            </div>

                            <div class="media-body m-t-5">
                                <h2> @{{publicacion.user.nombre | capitalize}} @{{publicacion.user.apellido | capitalize}}<small>Publicado @{{publicacion.created_at | fecha}}</small></h2>
                            </div>
                        </div>
                    </div>

                    <div class="card-body card-padding">
                        <p>@{{publicacion.descripcion}}</p>
                        <div class="row" v-if="publicacion.archivo !== null">
                            <div class="form-group">
                                <label><strong>Archivo adjunto : </strong></label>
                                <a v-bind:href="'{{route('downloadFile','')}}/'+publicacion.archivo" class="btn btn-info"><i class="zmdi zmdi-file"></i> Descargar Archivo</a>
                            </div>
                        </div>

                        <div class="wall-img-preview lightbox clearfix">
                            <div v-if="publicacion.imagen !== null" class="wip-item" v-bind:data-src="'{{asset('imagen/publicaciones')}}/'+publicacion.imagen" v-bind:style="'background-image: url({{asset('imagen/publicaciones')}}/'+publicacion.imagen+')'">
                                <img v-bind:src="'{{asset('imagen/publicaciones')}}/' + publicacion.imagen">
                            </div>
                        </div>

                        <ul class="wall-attrs clearfix list-inline list-unstyled">
                            <li class="wa-stats">
                               <a href="" class="btn btn-sm btn-primary" v-on:click.prevent="like(publicacion)"><i class="zmdi zmdi-star"></i> @{{publicacion.likes}} </a>
                            </li>

                            <li class="wa-users">
                                <!--<a href="#"><img src="img/profile-pics/2.jpg" alt=""></a>-->
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" v-on:click.prevent="getmore()" class="btn btn-primary btn-lg"><i class="zmdi zmdi-plus"></i> Mas Publicaciones</a>
                </div>
                <br>
            </div>

            <div class="col-md-4 hidden-sm">
    			<div class="card c-dark palette-Blue-Grey bg">
    		        <div class="card-header">
    		            <h2>Personas Afilidas <small>Cantidad total de personas afiliadas</small></h2>
    		        </div>
    		        <div class="card-body card-padding">
    		            <h2 class="m-t-0 m-b-15 c-white">
    		                <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
    		                {{$users}}
    		            </h2>
    		        </div>
    		    </div>
                <div class="card c-dark palette-Blue-Grey bg">
                    <div class="card-header">
                        <h2>Empresas con Beneficios <small>Cantidad total de Empresas con beneficios</small></h2>
                    </div>
                    <div class="card-body card-padding">
                        <h2 class="m-t-0 m-b-15 c-white">
                            <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
                            {{$empresasc}}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop