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
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>@yield('title') - Toutorials</title>
    <!-- Icons-->
    <!-- Main styles for this application--><meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="css/style.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    
    <script src="{{asset('/js/jquery.min.js')}}"></script>
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
       <nav class="app-header navbar">
          <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">categorias</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">interesantes</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">recursos</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">errores</a>
        </li>
      </ul>
      <div class="col-sm-7">
      <div class="search">
         <span class="">SEARCH </span> <input type="text" name="search" id="search" placeholder="Que quieres buscar?" class="form-control">
        </div>
        </div>
      </nav>
<a href="{{url('falta')}}">FALTA</a>
<div class="content">
	<div class="row">
		<div class="col/sm-10">
			
			@yield('contenidotema')
		</div>
	</div>
</div>		

    <footer class="app-footer">
      <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
  
  </body>
</html>

