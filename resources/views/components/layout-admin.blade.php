<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- bootstrap core css-->
    <link href="{{asset('css/bootstrap.css'}}" rel="stylesheet">
    <!--custom css-->
    <link herf="{{asset('css/custom.css'}}" rel="stylesheet">

</head>
<body>
    <div id="header" class="container">
        @section('header')
            'header content'
        @show
    </div>
    <div id="master">
        @yield('body')
    </div>
    <div id="footer" class="container">footer</div>
    <script src="{{asset(js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset(js/bootstrap.js')}}"></script>
    @yield('script')
</body>
</html>