

 <!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>@yield('title') - DigiNote</title>
    <!-- Icons-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="{{asset('vue/vue.js')}}"></script>
    <script src="{{asset('vue/vue-resource.js')}}"></script>
    <!-- Main styles for this application-->
    <link href="{{asset('/bootstrap4.1-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet"> -->
   <!--  <link href="{{asset('vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet"> -->
    <!-- Global site tag (gtag.js) - Google Analytics-->
 <script src="{{asset('bootstrap4.1-dist/js/bootstrap.min.js')}}"></script>

    <link href="{{asset('css/jumbotron.css')}}" rel="stylesheet">

  <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('/vendors/ckeditor/ckeditor.js')}}"></script>
    <!-- <script src="{{asset('/js/funciones.js')}}"></script> -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
    $("#select_all").change(function () {
      $("input#id_registro").attr('checked','true');
  });
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');

    </script>
    <style type="text/css">
      li:hover{
        background: #3F62E4;
      }
      a{
        color:lightblue;
      }
      
      .lista a{
        color:green;
      }
      
      a:hover{
        color:green;
      }
    </style>
    
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <img class="navbar-brand-full" src="{{url('/img/favicon.ico')}}" height="25">   </br>  <a class="navbar-brand"  href="{{route('temas.index')}}" >DigiNote</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault" style="margin-left: 640px; ">
        
        <form class="form-inline my-2 my-lg-0"  action="{{url('/search')}}" method="get">

           {{ csrf_field() }}
          <input class="form-control mr-sm-2" type="text" aria-label="Search" name="search" id="search" placeholder="Busca por palabra o categoria" style="width:500px;">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          <div class="col-md-1">
          <a href="{{route('help')}}"><span class="color:blue;"> Ayuda</span></a>
          </div>
        </form>
      </div>
    </nav>

      <div class="row"> 
          <div class="col-sm-2" style="background: #001b01">
               <a href="javascript:history.go(-1)"> <span class="glyphicon glyphicon-step-backward"></span><h3><b><u>VOLVER</u></b></h3>  </a>

        <nav class="sidebar-nav">


          <ul style="list-style: none">
            <li class="nav-item">
              <a href="{{url ('search',['id' => 8])}}" class="nav-link"><h4>recursos</h4></a>
            </li>
            <li class="nav-item">
              <a href="{{url ('search',['id' => 5])}}" class="nav-link"><h4>errores</h4></a>
            </li>

            <li class="nav-item">
              <a href="{{url ('search',['id' => 3])}}" class="nav-link"><h4>Idiomas</h4></a>
            </li>

            <li class="nav-item">
              <a href="{{url ('search',['id' => 4])}}" class="nav-link"><h4>C#</h4></a>
            </li>


            <li class="nav-item">
              <a href="{{url ('search',['id' => 1])}}" class="nav-link"><h4>HTML</h4></a>
            </li>

            <li class="nav-item">
              <a href="{{url ('search',['id' => 2])}}" class="nav-link"><h4>PHP</h4></a>
            </li>
            <li class="nav-item">
              <a href="{{url ('search',['id' => 9])}}" class="nav-link"><h4>Interesantes</h4></a>
            </li>
              <li class="nav-item"><a href="{{url ('search',['id' => 7])}}" class="nav-link"><h4>Siglas</h4></a></li>
            <li class="nav-item"><a href="{{url ('search',['id' =>6])}}" class="nav-link"><h4>Terminos</h4></a></li>
            <li class="nav-item"><a href="{{url ('search',['id'=>'00'])}}" class="nav-link"><h4>Cursos</h4></a></li>
          </ul>

          
        </nav>
          </div>
          <div class="col-sm-9">
              <!--  @directive1  directiva personalizada. Se definen ejecutando un comando en la terminal, creando un Service provider, defines el metodo, lo registras en el archivo general de service Providers y antes de usarlo ejecuta php artisan view:clear. Luego usalo asi como aqui.
         Igual te dejo un tutorial en este sistema -->

          @yield('content')
          </div>
      </div>  
  </body>
<!-- Footer -->
<footer class="page-footer font-small blue">
<div style="background:#000;">
<div id="massivedelete">
</div>
<form action="{{ url('elimina_registros') }}" method="POST">
{{ csrf_field() }}
<!-- @csrf le estaba enviando el token asi y no el campo {{ csrf_field() }}, por lo que me daba un error 
ique mistmatch token exception, ique The page has expired due to inactivity, refresh and try againn.
En el otro sistema me funciono el token porque .... no se... jjaja
solo,  si no te funciona el token, prueba con el campo
 -->
Eliminacion masiva <input type="checkbox" id="massive" @click="eliminar()">
<button class="btn btn-warning" type="submit">Eliminar</button> &nbsp; <input type="checkbox" id="select_all">&nbsp;Seleccionar todos</th>



                        <h2 class="bold" style="color:white;font-weight: bold">RECENT POSTS</h2>

                         @if(!empty($posts_temas))
                         
                          <div class="row">
                              @foreach($posts_temas as $posts_tema)
                              <input type="hidden" name="id_registro[]" value="{!! $posts_tema->id !!}">
                       
                              <ul style="list-style: none;">
                                <li >
                                  <h3>
                                    
                                  <a style="color:lightblue;" href="{{route ('temas.show',['id' => $posts_tema->id])}}"> {!! $posts_tema->titulo!!}</a>
      &nbsp;&nbsp;<input type="checkbox" id="id_registro" v-bind="id_elemento" v-if="id_elemento">
                                  </h3>
                                </li>
                              </ul>
                              @endforeach
                            </div>
                        @else
                          <h2>Aun no hay ningun post</h2>
                        @endif
                        </div>
    </form>
</footer>


<!-- Footer -->

<script>

var massive = new Vue({
  el: '#massivedelete',
  data:{
    id_elemento: false
  },
  methods: {
    eliminar: function(){
      this.id_elemento=true;
    }
  }
});
</script>

  </html>