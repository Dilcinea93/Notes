
	$( document ).ready(function() {
		//no se porque no captura el dato
  $(document).on('click','#eliminar',function(e){

		e.preventDefault();
    alert('Esta seguro que quiere eliminar el post?');
     $.ajax({
      type: 'GET',
     url: 'temas/'+id,  //laravel no esta agarrando esta ruta del controlador resource, sino de una ruta que ya existia en routes.web, por lo tanto como yo quiero hacer esta peticion ajax y las rutas de web.php son las que se recargan, por eso la pagina se sigue recargando, porque no la toma del controlador resource
      data: {
      	//no se porque me lleva a temas/undefined/edit... aun si le mando solo temas y edit... Esto me pasaba porque al intentar capturarla con el . (class), no estaba capturandola. Lo intente con ID y si...
                    '_token': $('input[name=_token]').val(),
                    'id_': $("#id_post").val(),
                    'categoria': $("#categoria").val(),
                    'titulo': $('#titulo').val(),
                    // 'post': $('#editor1').val() no se porque no captura este dato pero es por la clase ckeditor.... si le quito la clase, si lo guarda. 
                }
     });
  });
  });