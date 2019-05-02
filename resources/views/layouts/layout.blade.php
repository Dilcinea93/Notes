

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
    <!-- Main styles for this application-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <script src="{{asset('js/jquery.min.js')}}"></script>
 <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- <link href="{{asset('css/jumbotron.css')}}" rel="stylesheet"> -->
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
    <style type="text/css">
      li:hover{
        background: #3F62E4;
      }
      a{
        color:#fff;
      }
      
      .lista a{
        color:green;
      }
      
      a:hover{
        color:green;
      }
    </style>
  </head>

    <nav class="navbar navbar-inverse">
      <div class="row" style="margin-top: 10px;">
        <div class="col-sm-2" style="margin-left:30px; ">
          
          <img class="navbar-brand-full" src="{{url('/img/favicon.ico')}}" height="25"> <a class="navbar-brand"  href="{{route('home')}}" >DigiNote</a>
        </div>
      <div class="collapse navbar-collapse col-sm-2" id="navbarsExampleDefault" style="margin-left: 240px; ">
        
        <form class="form-inline my-2 my-lg-0"  action="{{url('/search')}}" method="get">

           {{ csrf_field() }}
          <input class="form-control mr-sm-2" type="text" aria-label="Search" name="search" id="search" placeholder="Busca por palabra o categoria" style="width:500px;">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div>
          
        </div>
      </div>
          <div class="col-sm-1" style="">
           <a href="{{url ('respaldo')}}"><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;Respaldo</a>
        
          </div>
          <div class="col-sm-1" style="">
           <a href="https://context.reverso.net/traduccion/"><span class="glyphicon glyphicon-transfer"></span>&nbsp;&nbsp;Traductor</a>
        
          </div>
          <div class="col-sm-1" style="">
           <a href="#"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;&nbsp;Ayuda</a>
        
          </div>
      </div>
    </nav>

      <div class="row"> 
          <div class="col-sm-2" style="background: #001b01">
               <a href="javascript:history.go(-1)"> <span class="glyphicon glyphicon-step-backward"></span><b><u>VOLVER</u></b> </a>

        <nav class="sidebar-nav">


          <ul style="list-style: none">
            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 8])}}" class="nav-link"><h4>recursos</h4></a>
            </li>
            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 5])}}" class="nav-link"><h4>errores</h4></a>
            </li>

            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 3])}}" class="nav-link"><h4>Idiomas</h4></a>
            </li>

            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 4])}}" class="nav-link"><h4>C#</h4></a>
            </li>


            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 1])}}" class="nav-link"><h4>HTML</h4></a>
            </li>

            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 2])}}" class="nav-link"><h4>PHP</h4></a>
            </li>
            <li class="nav-item">
              <a href="{{url ('resultados',['id' => 9])}}" class="nav-link"><h4>Interesantes</h4></a>
            </li>
              <li class="nav-item"><a href="{{url ('resultados',['id' => 7])}}" class="nav-link"><h4>Siglas</h4></a></li>
            <li class="nav-item"><a href="{{url ('resultados',['id' =>6])}}" class="nav-link"><h4>Terminos</h4></a></li>
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


                        <h2 class="bold" style="color:white;font-weight: bold">RECENT <mark>POSTS</mark></h2>

                          <div class="row">
                        @if(!empty($recent))
                              @foreach($recent as $recien)
                              <div class="col-sm-4">
                              <ul style="list-style: none;">
                                <li >
                                  <h3>
                                    
                                  <a style="color:white;" href="{{url ('tema',['id' => $recien->id])}}"> {!! $recien->titulo!!}</a>

                                  </h3>
                                </li>
                              </ul></div>
                              @endforeach
                        @else
                              

                          <h2>Aun no hay ningun post</h2>
                        @endif


                            </div>
                        </div>

</footer>
<!-- Footer -->
  </html>