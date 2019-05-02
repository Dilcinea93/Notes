@extends('layouts.layout')
@section('title','Informacion')

@section('content')
<script type="text/javascript">
	$( document ).ready(function() {
		//no se porque no captura el dato
  $(document).on('click','#editar',function(e){

		e.preventDefault();
var id = $("#id_post").val();
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
    </script>
    <style type="text/css">
    	
    	.boton a{
    		color:#fff;
    	}
    </style>
	@foreach($postss as $post)
	<div class="container">

		<form>
		<div class="row">
			<div class="col-sm-12">
			<center>
				<input type="hidden" id="id_post" name="" value="{!! $post->id!!}">
				<h2><u><lead>{!! $post->titulo!!}</lead>
	       		<small><span ><i>categoria: {!! $post->categoria->nombre!!}</i></span></small></u></h2>
			</center>
			</div>
		</div>
	</div>
	  <div class="container">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="container lista">
	<div class="row" >
		<div class="col-sm-10">
			
	  		<p style="font-size: 15px">  {!! $post->post!!} </p>
		</div>

		<div class="col-sm-2">
			<div class="row">
				<div class="col-sm-6 boton">
					<a class="btn btn-primary btn-xs" class="edit" href="{{url('update',['id' => $post->id])}}"><span class="glyphicon glyphicon-pencil"></span>ACTUALiZAR</a>
				</div>
				<div class="col-sm-6 boton">
					 <!-- <form action="{{action('ThemeController@destroy', $post->id)}}" method="post"> -->
                   <!-- {{csrf_field()}} -->
                   <!-- <input name="_method" type="hidden" value="DELETE"> -->
                   <a class="btn btn-danger btn-xs" href="{{url('destroy',['id' => $post->id])}}"><span class="glyphicon glyphicon-trash" value="ELIMINAR"></span>ELIMINAR</a>
               <!-- </form> -->
				</div>	
			</div>

		</div>
	</div>
</div>
	  </div>
	@endforeach
@endsection

