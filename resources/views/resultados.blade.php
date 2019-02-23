@extends('layout')
@section('title','Resultados')


@section('content')
	@foreach($search as $searchs)


<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<center>

				<input type="hidden" id="id" name="" value="{!! $searchs->id!!}">
				<h2><u>{!! $searchs->titulo!!}
	       		<span ><i>categoria: {!! $searchs->categoria->nombre!!}</i></span></u></h2>
			</center>
			</div>
		</div>
	</div>
	

	  <div class="container">
	<div class="row" >
		<div class="col-sm-10">
			
	  		<p style="font-size: 15px">  {!! $searchs->post!!} </p>
		</div>

		<div class="col-sm-2">
			<div class="row">
				

				<div class="col-sm-6">
					<a class="btn btn-primary btn-xs" href="{{action('ThemeController@edit',  $searchs->id)}}" ><span class="glyphicon glyphicon-pencil"></span>ACTUALiZAR</a>
				</div>	

				<div class="col-sm-6">
					 <form action="{{action('ThemeController@destroy', $searchs->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash" value="ELIMINAR"></span>ELIMINAR</button>
				</div>	
			</div>

		</div>
	</div>
</div>

	@endforeach
@endsection

