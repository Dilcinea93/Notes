$( document ).ready(function() {
	$("#post").click(function(e){
			var id= $('#value').val();
			//var token= $('meta[name="csrf-token"]').attr('content'); los comente para probar enviando la peticion por get... 
			//me trae la vista, pero ni me trae los datos enviados a esa vista ni renderiza la vista en el navegador sino en el preview
			$.ajax({
				url: "resultados",
		        //data: {id,_token:token}, igual esto lo comente para probar el envio por get
		        data: {id},
		        dataType: "json",
		        method: "GET",

			}).done( function() {

		    alert( 'Success!!' );

		});
	});
});