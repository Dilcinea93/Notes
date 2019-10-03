@extends('layouts.layout')
@section('title','Listado de posts')

@section('content')
 @if(!empty($resultados_get))
 <h3> 
 	@if(!empty($palabra))
		Resultados con la palabra {{$palabra}}

	@endif
		
</h3>
<div class="lista">
	<ul  style="list-style: none">
		@foreach($resultados_get as $resultado)
		
					
						<span >
						<i>Curso: {!! $resultado->titulo!!}</i>
  						</a>
						</span></u></h2>
					
						<span ><i>categoria:  resultado->categoria->nombre</i></span></u></h2>
					
		 	<li>
		      	<table style="width:100%;border:1px solid black;">
		      		<tr>
		      			<td style="word-break:break-all;width:80%;" >
		      				<h2>
					      			<u>
					      				<a href="{{route ('temas.show',['id' => $resultado->id])}}" > {!! $resultado->titulo!!}</a></u>
					      					<!-- almacena cada palabra en una posicion distinta de un array.
					      					recorre ese array y SI la posicion [i] tenga una cadena igual a Palabra, entonces imprime esa con un formato diferente.
					      					 por cada iteracion en el array, imprime el valor.. pero antes verifica si es igual a $palabra -->

			 		      				<p style="font-size: 5px">{!! str_limit($resultado->post, 40)!!}
					      				</p>
					      			
					      	</h2>

		      			</td>
		      			<td style="width:20%;">
		      				<a class="btn button btn-danger btn-xs" href="{{url('destroy',['id' => $resultado->id])}}" style="color:#fff;"><span class="glyphicon glyphicon-trash" value="ELIMINAR"></span>ELIMINAR</a>
		      			</td>
		      		</tr>
		      	</table>
		      			      	
		 
		      </li>
		@endforeach
		
	</ul>
</div>
<center>
	<div class="container-fluid">
		
	<div class="row">	
		<div class="col-xs-12">	
			@if(!empty($palabra))
					{!! $resultados_p->appends(['search' => $palabra])->links() !!}
			@else
					{!! $resultados_p->links() !!}
			@endif
	<!--
		->onEachSide(5) laravel 5.8
		fragment('foo'
		->appends(['sort' => 'votes'])
	-->
		</div>
</div>

</div>


</center>
	<center>

<h2>{{$resultados_p->total()}} registros encontrados</h2>		

        Pagina {{$resultados_p->currentPage()}} </br>
	 	@if(!empty($palabra))
			{{$resultados_p->total()}} con la palabra {{$palabra}}
		@endif
	</center>
 @else

  <h2>Aun no hay ningun post</h2>
 @endif
@endsection

