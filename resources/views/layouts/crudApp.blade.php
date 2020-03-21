<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Document</title>
    @yield('top')
</head>

<body>
    @yield('content')
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
@yield('bot')

</html>