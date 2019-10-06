@extends('layouts.layout')
@section('title','Descargar videos de youtube')

@section('content')
<div class="container">
    <div class="row">

    <div class="col-12">
    	<div class="card">

	        <div class="card-header">
	            <center>
	            		<h3 class="card-title p-3">Introduce el link del video</h3>
	        	</center>
	        </div><!-- /.card-header -->
	        <div class="card-body">
	            <div class="tab-content">
	                <div class="tab-pane active" id="tab_1">
						<div class="form-row">
					        <form  method="post" class="form-horizontal col-12">
					            <div >
					                <input type="text" name="link" placeholder="Introduce el link del video" class="form-control">
					            </div>
					            <div >
					                <button type="sumbit" class="btn btn-success btn-block">descargar</button>
					            </div>
					        </form>
				        </div>
				    </div>
	            </div>
	            <!-- /.tab-content -->
	        </div><!-- /.card-body -->
        </div>
        </div>
    </div>
</div>
@endsection