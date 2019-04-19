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
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->

    <script src="{{asset('/vendors/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/js/funciones.js')}}"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
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


  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <form action="{{url('/search')}}" method="get">
                            {{ csrf_field() }}
                    <div> 
                      <button type="submit" class="btn btn-success">
                     <span class="glyphicon glyphicon-search"> </span> SEARCH</button>
                    </div>

                    <div>
                           
                     <input type="text" name="search" id="search" placeholder="Busca por palabra o categoria" class="form-control">
                    </div>
                  </form>
     
    </header>

    
    <div class="app-body">
      <div class="sidebar">

          <a href="javascript:history.go(-1)"> <span class="glyphicon glyphicon-step-backward"></span><h3><b><u>VOLVER</u></b></h3>  </a>

        <span><h3>Categorias</h3></span>
        <nav class="sidebar-nav">


          <ul style="list-style: none" class="nav">
            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 8])}}" class="nav-link"><h3>recursos</h3></a>
            </li>
            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 5])}}" class="nav-link"><h3>errores</h3></a>
            </li>

            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 3])}}" class="nav-link"><h3>Idiomas</h3></a>
            </li>

            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 4])}}" class="nav-link"><h3>C#</h3></a>
            </li>


            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 1])}}" class="nav-link"><h3>HTML</h3></a>
            </li>

            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 2])}}" class="nav-link"><h3>PHP</h3></a>
            </li>
            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 9])}}" class="nav-link"><h3>Interesantes</h3></a>
            </li>
              <li class="nav-item"><a href="{{url ('resultados',['id' => 7])}}" class="nav-link"><h3>Siglas</h3></a></li>
            <li class="nav-item"><a href="{{url ('resultados',['id' =>6])}}" class="nav-link"><h3>Terminos</h3></a></li>
          </ul>

          
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        
        <div class="container-fluid">
         <!--  @directive1  directiva personalizada. Se definen ejecutando un comando en la terminal, creando un Service provider, defines el metodo, lo registras en el archivo general de service Providers y antes de usarlo ejecuta php artisan view:clear. Luego usalo asi como aqui.
         Igual te dejo un tutorial en este sistema -->

          @yield('content')
        </div>
      </main>
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
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
