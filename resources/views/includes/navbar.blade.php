
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-ligth fixed" style="background-color: #008F39;">
      
  <div class="row " style="">
    <div class=" col-sm-3">
      <div class="row">
        <div class="col-sm-3">
          
          <img class="navbar-brand-full" src="{{url('../img/icono.png')}}" height="25"> 
        </div>
        <div class="col-sm-3">
          
         <a class="navbar-brand"  href="{{route('temas.index')}}" style="color:#141414;"><b> DigiNote </b></a>
        </div>
      </div>
    </div>
    <div class="col-sm-4" style="margin-left:450px;">
       <form class="form-inline my-2 my-lg-0"  action="{{url('/search')}}" method="get">

           {{ csrf_field() }}
          <input class="form-control mr-sm-2" type="text" aria-label="Search" name="search" id="search" placeholder="Busca por palabra o categoria" style="width:500px;">
          <div class="col-md-2">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </div>
          <div class="col-md-2 offset-1">
            <a href="{{route('help')}}"><span class="color:blue;"> Ayuda</span></a>
          </div>
          <div class="col-md-2">
            <a href="{{route('respaldo')}}"><span class="color:blue;"> Respaldo</span></a>
          </div>
        </form>
    </div>
  </div>
  </nav></div>