@extends('layout')
@section('title','Resultados')

@section('content')

	@foreach($posts as $post)
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
			<center>

				<input type="hidden" id="id" name="" value="{!! $post->id!!}">
				<h2><u>{!! $post->titulo!!}</u> &nbsp;&nbsp;</h2>
				
			</center>
				<h4>
	       		<span style="color:blue">categoria: {!! $post->categoria->nombre!!}</span></h4>
			</div>
		</div>
	</div>
	

	  <div class="container">

	  	<p>  {!! $post->post!!} </p> 
	  	<button class="btn btn-warning" id="borrar"><span class="glyphicon glyphicon-erase"></span>Borrar</button>

	  	<button class="btn btn-info" id="editar"> <span class="glyphicon glyphicon-pencil"></span>editar</button>
	  </div>
	@endforeach
@endsection

