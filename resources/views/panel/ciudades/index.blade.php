@extends('panel.template-table')
@section('contenido')
<div class="card">
    <div class="card-header">
        <div class="row">
        	<div class="col-sm-6">
        		<h2><strong>CIUDADES REGISTRADAS</strong></h2>
        	</div>
        	<div class="col-sm-6">
        		<div class="pull-right">
        			<br>
        			<a href="{{route('ciudades.create')}}" class="btn btn-info"><i class="zmdi zmdi-plus"></i> Nuevo Registro</a>
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
	                <th data-column-id="pais">Pais</th>
	                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Opciones</th>
	            </tr>
	        </thead>
	        <tbody>
	            @foreach($ciudades as $ciudad)
	                    <tr>
	                    	<td>{{$ciudad->id}}</td>
	                        <td class="text-center">{{$ciudad->nombre}}</td>
	                        <td class="text-center">{{ucwords($ciudad->pais->nombre)}}</td>
	                        <td  class="text-center"> 
	                        </td> 
	                    </tr>      	                   
                        @include('panel.ciudades.delete')
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

            		var edit="<a href=\"/panel/ciudades/"+row.id+"/edit\" class=\"btn btn-icon command-edit waves-effect waves-circle\"><span style=\"color: #00bcd4;\" class=\"zmdi zmdi-edit\"></span></a> " ;

            		var borrar = "<a data-toggle=\"modal\" data-target=\"#modal-delete-"+row.id+"\" class=\"btn btn-icon command-delete waves-effect waves-circle\" ><span style=\"color:red;\" class=\"zmdi zmdi-delete\"></span></a>";
            		return edit+" "+borrar;
            },
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
    });
</script>
@stop