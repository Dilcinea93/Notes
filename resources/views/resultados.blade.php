@extends('layout')
@section('title','Resultados')


@section('content')
	@foreach($search as $searchs)

	  <center>
				<h2><u>{!! $searchs->titulo!!}</u></h2>
				
			</center>
	  <div class="container">

	  	<p>  {!! $searchs->post!!} </p>
	  </div>
	@endforeach
@endsection

