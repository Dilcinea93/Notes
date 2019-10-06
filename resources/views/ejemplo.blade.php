<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
    <div class="col-sm-9" style="border:1px solid red;">
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container" style="border:1px solid blue;">
            @yield('content')
        </div>
    </div>
    </body>
</html>