@extends('layouts.layout')
@section('title','Informacion')

@section('content')

    <style type="text/css">
    	
    	.boton a{
    		color:#fff;
    	}
    </style>
	@foreach($postss as $post)
	<div class="container">

		<form>
		<div class="row">
			<div class="col-sm-12">
			<center>
				<input type="hidden" id="id_post" name="" value="{!! $post->id!!}">
				<h2><u><lead>{!! $post->titulo!!}</lead>
	       		<small><span ><i>categoria: {!! $post->categoria->nombre!!}</i></span></small></u></h2>
			</center>
			</div>
		</div>
	</div>
	  <div class="container">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="container lista">
	<div class="row" >
		<div class="col-sm-10">
			
	  		<p style="font-size: 15px">  {!! $post->post!!} </p>
		</div>

		<div class="col-sm-2">
			<div class="row">
				<div class="col-sm-6 boton">
					<a class="btn btn-primary btn-xs" class="edit" href="{{url('update',['id' => $post->id])}}"><span class="glyphicon glyphicon-pencil"></span>ACTUALiZAR</a>
				</div>
				<div class="col-sm-6 boton">
					 <!-- <form action="{{action('ThemeController@destroy', $post->id)}}" method="post"> -->
                   <!-- {{csrf_field()}} -->
                   <!-- <input name="_method" type="hidden" value="DELETE"> -->
                   <a class="btn btn-danger btn-xs"  id="eliminar"><span class="glyphicon glyphicon-trash" value="ELIMINAR"></span>ELIMINAR</a>
               <!-- </form> -->
				</div>	
			</div>

		</div>
	</div>
</div>
	  </div>
	@endforeach
@endsection

