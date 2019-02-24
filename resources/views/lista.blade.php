@extends('layout')
@section('title','Listado de posts')

@section('content')
 @if(!empty($resultados))
	<ul>
		
		@foreach($resultados as $resultado)
		      <li>
		      	<h2>
		      			<u>
		      				<a href="{{url ('tema',['id' => $resultado->id])}}"> {!! $resultado->titulo!!}</a>
		      			</u>
		      	</h2>
		      	
		 
		      </li>
		@endforeach
		
	</ul>

 @else
                              

  <h2>Aun no hay ningun post</h2>
 @endif
@endsection

