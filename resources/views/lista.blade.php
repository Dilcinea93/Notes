@extends('layout')
@section('title','Resultados')

@section('content')

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
@endsection

