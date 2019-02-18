@extends('layout')
@section('title','Resultados')

@section('content')

<ul>
	
	@foreach($resultados as $resultado)
	      <li>
	      	<h2>
	      		<i>
	      			<u>
	      				<a href="{{url ('tema',['id' => $resultado->id])}}"> {!! $resultado->titulo!!}</a>
	      			</u>
	      		</i>
	      	</h2>
	      	
	 
	      </li>
	@endforeach
	
</ul>
@endsection

