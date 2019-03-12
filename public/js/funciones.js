$( document ).ready(function() {
	$("#editar").click(function(e){
		e.preventDefault();

			var id= $('#id').val();
			var token=$("input[name=_token]").val();
			var url= "../temas/"+id+"/edit"
			$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });

			//var token= $('meta[name="csrf-token"]').attr('content'); los comente para probar enviando la peticion por get... 
			//me trae la vista, pero ni me trae los datos enviados a esa vista ni renderiza la vista en el navegador sino en el preview
			$.ajax({
				url: url,
		        //data: {id,_token:token}, igual esto lo comente para probar el envio por get
		       
   				headers:{'X-CSRF-TOKEN':token},
		        dataType: "json",
		        method: "GET",

			}).done( function() {
				load('localhost:8000');
		});
	});
});

