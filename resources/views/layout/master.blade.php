<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet preload" as="style" type="text/css" media="screen" href="{{url('/css/app.css')}}" />
    <script rel="preload" as="script" src="{{url('js/app.js')}}" async ></script>
</head>

<body>
    @section('header')
    @include('layout.header')
    @show
    @yield('content')
    @section('footer')
    @include('layout.footer')
    @show
</body>

</html>
