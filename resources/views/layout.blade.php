<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.11
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <link rel="icon" type="image/png" href="{{asset('img/icono.png')}}" />

    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>@yield('title') - DigiNote</title>
    <!-- Icons-->
    <!-- Main styles for this application--><meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="css/style.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    
    <script src="{{asset('/js/jquery.min.js')}}"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="{{asset('/vendors/ckeditor/ckeditor.js')}}"></script>

    <script src="{{asset('/js/funciones.js')}}"></script>

    <script>
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
  </head>
  <body>
    <header >
      
      
      
      
    </header>
   
      <main class="main">

   

        <!-- Breadcrumb-->
        <div style="width:100%">
           <nav class="app-header navbar nav navbar-inverse">
            <div class="col-sm-3">
              
              <a href="{{route('home')}}" class="navbar-brand"><h2>DigiNote</h2></a>
            </div>

              <div class="col-sm-4">
                <div class="search">
                  <form action="{{url('/search')}}" method="get">
                            {{ csrf_field() }}
                    <div class="col-sm-2"> 
                      <button type="submit" class="btn btn-success">
                     <span class="glyphicon glyphicon-search"> </span> SEARCH</button>
                    </div>

                    <div class="col-sm-10">
                           
                     <input type="text" name="search" id="search" placeholder="Busca por palabra o categoria" class="form-control">
                    </div>
                  </form>
                </div>
              </div>
          </nav>
        </div>



              <div class="row">
                <div class="col-sm-2" class="lista" style="color:#fff;background: #000">
                  
 <a href="javascript:history.go(-1)"> <h3><b><u><span class="glyphicon glyphicon-step-backward"></span>VOLVER</u></b></h3>  </a>

                  <span><h3><b><u>Listado de categorias</u></b></h3></span>

                  <ul style="list-style: none">
                       
                        <li class="nav-item px-3">
                          <a href="{{url ('resultados',['id' => 8])}}"><h3>recursos</h3></a>
                        </li>
                        <li class="nav-item px-3">
                          <a href="{{url ('resultados',['id' => 5])}}"><h3>errores</h3></a>
                        </li>

                        <li class="nav-item px-3">
                          <a href="{{url ('resultados',['id' => 3])}}"><h3>Idiomas</h3></a>
                        </li>

                        <li class="nav-item px-3">
                          <a href="{{url ('resultados',['id' => 4])}}"><h3>C#</h3></a>
                        </li>


                        <li class="nav-item px-3">
                          <a href="{{url ('resultados',['id' => 1])}}"><h3>HTML</h3></a>
                        </li>

                        <li class="nav-item px-3">
                          <a href="{{url ('resultados',['id' => 2])}}"><h3>PHP</h3></a>
                        </li>

                        <li class="nav-item px-3">
                          <a href="{{url ('resultados',['id' => 9])}}"><h3>Interesantes</h3></a>
                        </li>
                          <li class="nav-item px-3"><a href="{{url ('resultados',['id' => 7])}}"><h3>Siglas</h3></a></li>
                        <li class="nav-item px-3"><a href="{{url ('resultados',['id' =>6])}}"><h3>Terminos</h3></a></li>


                        <li class="nav-item px-3"><a href="{{url ('falta')}}"><h3>FALTA</h3></a></li>
                      </ul>
                </div>
                <div class="col-sm-8" >
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        @yield('content')
                      </div>
                    </div>
                  </div>
                </div>
              </div>     

              <div style="background:#000;">


                        <h2 class="bold" style="color:white;font-weight: bold">RECENT POSTS</h2>

                        @if(!empty($posts))
                          <div class="row">
                              @foreach($posts as $post)
                              <ul style="list-style: none;">
                                <li >
                                  <h3>
                                    
                                  <a style="color:white;" href="{{route ('temas.show',['id' => $post->id])}}"> {!! $post->titulo!!}</a>

                                  </h3>
                                </li>
                              </ul>
                              @endforeach
                            </div>
                        @else
                              

                          <h2>Aun no hay ningun post</h2>
                        @endif
                        </div>

  
   
    <!-- CoreUI and necessary plugins-->
  
  </body>
</html>
