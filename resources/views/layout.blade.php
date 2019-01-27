<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.11
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <link rel="icon" type="image/png" href="{{asset('img/icono.png')}}" />

    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>@yield('title') - Tutorials</title>
    <!-- Icons-->
    <!-- Main styles for this application--><meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="css/style.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    
    <script src="{{asset('/js/jquery.min.js')}}"></script>

    <script src="{{asset('/css/bootstrap.min.css')}}"></script>

    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
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
       <nav class="app-header navbar nav navbar-inverse">
          <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#"><h3>categorias</h3></a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#"><h3>interesantes</h3></a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#"><h3>recursos</h3></a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#"><h3>errores</h3></a>
        </li>
      </ul>
      <div class="col-sm-7">
      <div class="search">
         <span class="glyphicon glyphicon-search"> </span> <input type="text" name="search" id="search" placeholder="Que quieres buscar?" class="form-control">
        </div>
        </div>
      </nav>
<a href="{{url('falta')}}">FALTA</a>
              <div class="row">
                <div class="col-sm-8 offset-2">
                  
              @yield('content')
                </div>
              </div>
                        
                        <div style="background:#080a19;">


                        <h2 class="bold" style="color:white;font-weight: bold">RECENT POSTS</h2>
                              <div class="row">
                              @foreach($posts   as $post)
                          <input type="hidden" name="" id="value" value="{!! $post->id!!}">
                              <div class="col-sm-2 offset-2 card">

                            <img class="card-img-top" src="..."  id="post" alt="{!! $post->titulo!!}">
                              </div>
                              @endforeach
                            </div>
                        </div>
   
    <!-- CoreUI and necessary plugins-->
  
  </body>
</html>
