@extends('inicio.template')
@section('contenido')
<div class="container mt-4">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="panel panel panel-primary panel-dark text-center">
      <div class="panel-body">
        <h2 class="counter">{{$institucion->visitas}}</h2>
        <i class="fa fa-4x fa-eye"></i>
        <p class="mt-2 no-mb lead small-caps">Visitas</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="panel panel panel-primary panel-dark text-center">
      <div class="panel-body">
        <h2 class="counter">{{$countEmpresas}}</h2>
        <i class="fa fa-4x fa-building"></i>
        <p class="mt-2 no-mb lead small-caps">Beneficios en Empresas</p>
      </div>
    </div>
  </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="panel panel panel-primary panel-dark text-center">
      <div class="panel-body">
        <h2 class="counter">{{$countUsers}}</h2>
        <i class="fa fa-4x fa-group"></i>
        <p class="mt-2 no-mb lead small-caps">Personas Afiliadas</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container mt-4">
  <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">{{$institucion->titulosomos}}</h2>
  <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4">{{$institucion->qSomos}}.</p>
  <div class="row">
    <div class="ms-feature col-xl-6 col-lg-6 col-md-6 card wow flipInX animation-delay-4">
      <div class="text-center card-body">
        <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">
          <i class="zmdi zmdi-cloud-outline"></i>
        </span>
        <h4 class="color-info">Mision</h4>
        <p class="">{{$institucion->mision}}</p>
      </div>
    </div>
    <div class="ms-feature col-xl-6 col-lg-6 col-md-6 card wow flipInX animation-delay-8">
      <div class="text-center card-body">
        <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
          <i class="zmdi zmdi-desktop-mac"></i>
        </span>
        <h4 class="color-warning">Vision</h4>
        <p class="">{{$institucion->vision}}</p>
      </div>
    </div>
  </div>
</div>
<!-- container -->
<div class="wrap wrap-mountain mt-6">
  <div class="container">
    <h2 class="text-center text-light mb-6 wow fadeInDown animation-delay-5"><strong>{{$institucion->titulotrabaja}}</strong></h2>
    <div class="row">
      <div class="col-lg-6 order-lg-2 mb-4  center-block">
         <div class="card wow zoomIn animation-delay-12">
              <div data-type="youtube" data-video-id="{{$institucion->imgtrabaja}}"></div>
          </div>
       </div>
      <div class="col-lg-6 order-lg-1 pr-6">
        {!!$institucion->trabaja!!}
      </div>
    </div>
  </div>
</div>
<!-- container -->
<div class="container mt-6">
  <div class="text-center mb-4">
    <h2 class="uppercase color-primary">{{$institucion->tituloplan}}</h2>
    <p class="lead uppercase">{{$institucion->desplan}}</p>
  </div>
  <div class="row no-gutters">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <div class="price-table price-table-warning wow zoomInUp animation-delay-2">
        <header class="price-table-header">
          <span class="price-table-category">{{$institucion->nombreplan}}</span>
          <h3>
            <sup>Bs</sup>{{$institucion->bsprecio}}
            <sub>/$us {{$institucion->susprecio}}</sub>
            <br>
            <sub>{{$institucion->plan}}</sub>
          </h3>
        </header>
        <div class="price-table-body">
          <ul class="price-table-list">
            <li>
              <div class="text-center">
              <i class="zmdi zmdi-star"></i> 
              </div>
              {!!$institucion->benplan1!!}
            </li>
            <li>
               <div class="text-center">
              <i class="zmdi zmdi-star"></i> 
              </div>
              {!!$institucion->benplan2!!}
            </li>
            <li>
               <div class="text-center">
              <i class="zmdi zmdi-star"></i> 
              </div>
              {!!$institucion->benplan3!!}
            </li>
            <li>
               <div class="text-center">
              <i class="zmdi zmdi-star"></i> 
              </div>
              {!!$institucion->benplan4!!}
            </li>
            <li>
               <div class="text-center">
              <i class="zmdi zmdi-star"></i> 
              </div>
              {!!$institucion->benplan5!!}
            </li>
          </ul>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
  </div>
</div>
<!--container -->

@stop