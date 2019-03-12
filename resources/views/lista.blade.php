@extends('layout')
@section('title','Listado de posts')

@section('content')
 @if(!empty($resultados))
 <h3> </h3>
	<ul>
		
		@foreach($resultados as $resultado)
		      <li>
		      	<h2>
		      			<u>
		      				<a href="{{url ('tema',['id' => $resultado->id])}}"> {!! $resultado->titulo!!}</a></u>
		      				<p style="font-size: 5px">{!! str_limit($resultado->post, 40)!!}
		      				</p>
		      			
		      	</h2>
		      	
		 
		      </li>
		@endforeach
		
	</ul>
	<center>

<h2>
{{$cantidad}} registros encontrados</h2>		
	</center>
 @else
                              

  <h2>Aun no hay ningun post</h2>
 @endif
@endsection

