@extends('panel.template-table')
@section('contenido')
<div class="card">
    <div class="card-header">
        <div class="row">
        	<div class="col-sm-6">
        		<h2><strong>ACTIVIDADES REGISTRADAS</strong></h2>
        	</div>
        	<div class="col-sm-6">
        		<div class="pull-right">
                    <br>
        			<a href="{{route('actividades.create')}}" class="btn btn-info"><i class="zmdi zmdi-plus"></i> Nuevo Registro</a>
        		</div>
        	</div>
        </div>

    </div>
	<div class="table-responsive">
	    <table id="data-table-command" class="table table-striped table-vmiddle">
	        <thead>
	            <tr>
	                <th data-column-id="id">ID</th>
	                <th data-column-id="nombre">Nombre</th>
	                <th data-column-id="fecha">Fecha</th>
	                <th data-column-id="imagen" data-formatter="imagen">Imagen</th>
                    <th data-column-id="activo" data-formatter="estado">Estado</th>
	                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Opciones</th>
	            </tr>
	        </thead>
	        <tbody>
	            @foreach($actividades as $actividad)
	                    <tr>
	                    	<td>{{$actividad->id}}</td>
	                        <td class="text-center">{{$actividad->nombre}}</td>
	                        <td class="text-center">{{ucwords($actividad->fecha)}}</td>
	                        <td class="text-center">{{$actividad->imagen}}</td>
                            <td class="text-center">{{$actividad->activo}}</td>
	                        <td  class="text-center"> 
	                        </td> 
	                    </tr>      	                   
                        @include('panel.actividades.delete')
	                	@include('panel.actividades.estado')
	            @endforeach       
	        </tbody>
	    </table>
	</div>
</div>
@stop
@section('script')
<script>
	$(window).load(function(){
	toastr.options = {
	  "closeButton": true,
	  "debug": false,
	  "newestOnTop": false,
	  "progressBar": true,
	  "positionClass": "toast-bottom-right",
	  "preventDuplicates": false,
	  "onclick": null,
	  "showDuration": "300",
	  "hideDuration": "1000",
	  "timeOut": "5000",
	  "extendedTimeOut": "1000",
	  "showEasing": "swing",
	  "hideEasing": "linear",
	  "showMethod": "fadeIn",
	  "hideMethod": "fadeOut"
	};
	toastr.info("{{\Session::get('message')}}");
    
	});
  	$("#data-table-command").bootgrid({
        css: {
            icon: 'zmdi icon',
            iconColumns: 'zmdi-view-module',
            iconDown: 'zmdi-expand-more',
            iconRefresh: 'zmdi-refresh',
            iconUp: 'zmdi-expand-less'
        },
        formatters: {

            "commands": function(column, row) {
            	if(row.activo==1)
            	{
            		var estado = "<a data-toggle=\"modal\" data-target=\"#modal-estado-"+row.id+"\" class=\"btn btn-icon command-estado waves-effect waves-circle\" ><span style=\"color: red;\" class=\"zmdi zmdi-close\"></span></a> ";
            	}else{
            		var estado = "<a data-toggle=\"modal\" data-target=\"#modal-estado-"+row.id+"\" class=\"btn btn-icon command-estado waves-effect waves-circle\" ><span style=\"color: green;\" class=\"zmdi zmdi-check\"></span></a> ";	 
            	}
            		var edit="<a href=\"/panel/actividades/"+row.id+"/edit\" class=\"btn btn-icon command-edit waves-effect waves-circle\"><span style=\"color: #00bcd4;\" class=\"zmdi zmdi-edit\"></span></a> " ;

            		var borrar = "<a data-toggle=\"modal\" data-target=\"#modal-delete-"+row.id+"\" class=\"btn btn-icon command-delete waves-effect waves-circle\" ><span style=\"color:red;\" class=\"zmdi zmdi-delete\"></span></a>";
            		
            		
            		return estado+" "+edit+" "+borrar;
            },
            "imagen": function(column,row){
            	return "<img src=\"{{asset('imagen')}}/actividades/" +row.imagen+"\" width=\"50px\" height=\"50px\" class=\"img-responsive img-thumbnail\" data-row-id=\"" + row.id + "\">";
            },
            "estado": function(column,row){
            	if(row.activo==1)
            	{
            		return "<span class=\"label label-success\">Activo</span>";
            	}else{
            		return "<span class=\"label label-danger\">No activo</span>";
            	}
            }
        },
        labels: {
		     noResults: "No hay resultados",
		     all: "Todo",
		     infos:"Mostrar de @{{ctx.start}} a @{{ctx.end}} de @{{ctx.total}} registros",
		     search:"Buscar"
		 }
    }).on("loaded.rs.jquery.bootgrid", function () {
        /* Executes after data is loaded and rendered */
        $(this).find(".command-delete").click(function (e) {
            $($(this).attr("data-target")).modal("show");
        });
          $(this).find(".command-estado").click(function (e) {
            $($(this).attr("data-target")).modal("show");
        });
           $(this).find(".command-show").click(function (e) {
            $($(this).attr("data-target")).modal("show");
        });
    });
</script>
@stop