<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{url('/css/bootstrap-3/css/bootstrap.css')}}">
        <script src="{{url('/js/jquery-3.2.0.js')}}"></script>
        <script src="{{url('/css/bootstrap-3/js/bootstrap.js')}}"></script>
    </head>
    <body>
        <div class="jumbotron" align="center">
            <h1>@yield('cabecera')</h1>
        </div>
    </body>
</html>