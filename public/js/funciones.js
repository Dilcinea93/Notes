$( document ).ready(function() {
	$("#editar").click(function(e){
		e.preventDefault();
			var id= $('#id').val();
			var token=$("input[name=_token]").val();
			// var url= "http:\\localhost:puerto\Controler.php"
			var url="/editar";
			//var token= $('meta[name="csrf-token"]').attr('content'); los comente para probar enviando la peticion por get... 
			//me trae la vista, pero ni me trae los datos enviados a esa vista ni renderiza la vista en el navegador sino en el preview
			$.ajax({
				url: url,
		        //data: {id,_token:token}, igual esto lo comente para probar el envio por get
		        data: {id},
   				headers:{'X-CSRF-TOKEN':token},
		        dataType: "json",
		        method: "POST",

			}).done( function() {

		    alert( 'Success!!' );

		});
	});
});