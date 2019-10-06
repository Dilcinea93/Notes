

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
 <script src="{{asset('bootstrap4.1-dist/fonts')}}"></script>

    <link href="{{asset('css/jumbotron.css')}}" rel="stylesheet">

  <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('/vendors/ckeditor/ckeditor.js')}}"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
        color:#282821;
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
  <div class="row">
    
  @include('includes.navbar')
  </div>
    <div class="row">
      <div class="col-sm-1">

          @include('includes.sidebar')
      </div>
      <div class="col-sm-8 offset-2" style="background: #ecebed">
        <div class="">
          
          @yield('content')
        </div>
      </div>
    </div>
   </body>

   <footer>

   @include('includes.footer')

   </footer>



  </html>