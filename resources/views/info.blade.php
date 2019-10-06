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
     url: 'temas.edit/'+id,  //laravel no esta agarrando esta ruta del controlador resource, sino de una ruta que ya existia en routes.web, por lo tanto como yo quiero hacer esta peticion ajax y las rutas de web.php son las que se recargan, por eso la pagina se sigue recargando, porque no la toma del controlador resource
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
	@foreach($posts as $post)
	<div class="container">
		<form>
		<div class="row lista">
			<div class="col-sm-12">
				<center>
					<input type="hidden" id="id_post" name="" value="{!! $post->id!!}">
					
					@if($curso == 0)
						<span >
						<a href="{{url ('resultados',['id' => $post->id,'curso' =>'0'])}}" >
						<i>Curso: {!! $post->titulo!!}</i>
  						</a>
						</span></u></h2>
					@else 
						<span ><i>categoria: {!! $post->categoria->nombre!!}</i></span></u></h2>
					@endif
				</center>
			</div>
		</div>
	</div>
	  <div class="container">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="container">
	<div class="row" style="border-color:red;">
		<div class="col-sm-8">
	  		<p style="font-size: 15px"> {!! $post->post!!} </p>
		</div>
		<div class="col-sm-4">
					<a class="" class="edit" href="{{url('update',['id' => $post->id])}}"> <i class="fa fa-fw fa-facebook"></i> <span class="glyphicon glyphicon-pencil"></span>Actualizar</a>
					 <!-- <form action="{{action('ThemeController@destroy', $post->id)}}" method="post"> -->
                   <!-- {{csrf_field()}} -->
                   <!-- <input name="_method" type="hidden" value="DELETE"> -->
                   |<a class="" href="{{route('temas.destroy',['id' => $post->id])}}"><span class="glyphicon glyphicon-trash" value="ELIMINAR"></span>Eliminar</a>
               <!-- </form> -->

		</div>
	</div>
</div>
	  </div>
	@endforeach
	
@endsection

