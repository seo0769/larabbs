<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scal=1">
    <!--CSRF Token-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','LaraBBS') - Laravel 进阶教程</title>
    <!--Styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app" class="{{ route_class() }}-page">

        @include('layouts._header')

        <div class="container">
            @include('layouts._message')
            @yield('content')
        </div>

        @include('layouts._footer')
    </div>

    <!--Scripts-->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>