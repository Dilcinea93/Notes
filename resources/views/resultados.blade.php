@extends('layout')
@section('title','Resultados')


@section('content')
	@foreach($search as $searchs)

	  <a href="{{url ('tema',['id' => $searchs->id])}}"> {!! $searchs->titulo!!}</a>
	  <div class="container">

	  	<p>  {!! $searchs->post!!} </p>
	  </div>
	@endforeach
@endsection

