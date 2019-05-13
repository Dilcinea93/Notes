@extends('layouts.layout')
@section('title','Listado de posts')

@section('content')
 @if(!empty($resultados))
 	<h3> 
 	 	@if(!empty($resultado->titulo))
			Resultados con la palabra {{$resultado->titulo}}
		@endif
	</h3>
<div class="lista">
	
	<ul  style="list-style: none">
		@foreach($resultados as $resultado)
			<span style="color:#00dd00;">	</span>Categoria {!! $resultado->categoria->nombre!!}
		      <li>
		      	<table style="width:100%;border:1px solid black;">
		      		<tr>
		      			<td style="word-break:break-all;width:80%;" >
		      				<h2>
				      			<u>
				      				<a href="{{url ('tema',['id' => $resultado->id])}}" > {!! $resultado->titulo!!}</a>
				      			</u>
		 		      			<p style="font-size: 5px">{!! str_limit($resultado->post, 40)!!}</p>
					      	</h2>
		      			</td>
		      			<td style="width:20%;">
		      				<a class="btn button btn-danger btn-xs" href="{{url('destroy',['id' => $resultado->id])}}" style="color:#fff;" id="eliminar"><span class="glyphicon glyphicon-trash" value="ELIMINAR"></span>ELIMINAR</a>
		      			</td>
		      		</tr>
		      	</table>
		      </li>
		@endforeach
	</ul>
</div>
<center>
	<div class="container-fluid">
		<div class="row">	
			<div class="col-xs-12">	
				@if(!empty($palabra))
						{!! $resultados->appends(['search' => $palabra])->links() !!}
				@else
						{!! $resultados->links() !!}
				@endif
		<!--
			->onEachSide(5) laravel 5.8
			fragment('foo'
			->appends(['sort' => 'votes'])
		-->
			</div>
		</div>
	</div>

	<center>
		<h2>
			@if(empty($resultado->titulo))
				{{$title_post}} 
		 		</br>
				<button class="btn btn-success">
					<span class="glyphicon glyphicon-add"></span> &nbsp;
					<a href="{{route ('home')}}" >AGREGAR
					</a>
				</button>
			@else

				{{$resultados->total()}} registros encontrados 
			 	</br>	
			@endif </br>
		</h2>Pagina {{$resultados->currentPage()}}
	</center>

 @endif

@endsection

