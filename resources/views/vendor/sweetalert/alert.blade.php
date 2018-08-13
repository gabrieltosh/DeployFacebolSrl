@if (Session::has('alert.config'))
    <script>
    	$(document).ready( function(){
        	swal({!! Session::pull('alert.config') !!});
    	});
    </script>
@endif
