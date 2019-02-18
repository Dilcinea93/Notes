@extends('layout')
@section('title','Resultados')

@section('content')

	@foreach($posts as $post)
	      <a href="{{url ('tema',['id' => $post->id])}}"> {!! $post->titulo!!}</a> &nbsp;&nbsp; categoria: {!! $post->categoria->nombre!!}
	  <div class="container">

	  	<p>  {!! $post->post!!} </p> 
	  	<button class="btn btn-warning" id="borrar"><span class="glyphicon glyphicon-erase"></span>Borrar</button>

	  	<button class="btn btn-info" id="editar"> <span class="glyphicon glyphicon-pencil"></span>editar</button>
	  </div>
	@endforeach
@endsection

