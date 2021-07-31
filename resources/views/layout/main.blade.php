<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/40245cd335.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mis-estilos.css') }}">
    
    <title>Palma | @yield('title')</title>

    @section('css') 
    @show
</head>

<body class="bg-white">
    @include('layout.navbar')

    @section('content')
    @show

    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/vue.js') }}"></script>
    @section('js')
    @show
</body>

</html>