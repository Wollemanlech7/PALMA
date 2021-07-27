<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script src="https://kit.fontawesome.com/40245cd335.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palma | @yield('title')</title>

    @section('css') 
    @show
</head>

<body class="bg-white">
    @include('layout.navbar')

    @section('content')
    @show

    <div class="container is-fluid">
        <div class="columns is-mobile">
            <div class="column is-12-mobile is-3-desktop ">
                <h1 class="title is-1 text-black">ESCOGE TUS SNACKS FAVORITOS</h1>
            </div>
        </div>
        <div class="columns is-mobile">
            <div class="column is-9-mobile">
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-large  is-white" type="text" placeholder="Búsqueda...">
                    <span class="icon is-medium is-left">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
            <div class="column is-3-mobile">
                <button class="button is-large">
                    <span class="icon is-small">
                        <i class="fas fa-heading"></i>
                    </span>
                </button>
            </div>
        </div>
        <div style="overflow-x: scroll" class="column is-flex-direction-row is-flex">
            @foreach ($categories as $category)
                <div class="column is-7-mobile mb-0 ">
                    <div class="card ">
                        <div class="card-content ">
                            <div class="columns is-mobile is-vcentered">
                                <div class="column is-4-mobile mb-0">
                                    <figure class="img is-48x48 mb-0">
                                        <img class="mb-0" src="{{ asset('img/sabritas-limon.jpg') }}" alt="img">
                                    </figure>
                                </div>
                                <div class="column is-8-mobile ">
                                    <p class="title is-4 text-">{{ $category->category }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


        <div style="display:flex; flex-wrap:wrap " class="columns is-mobile ">
            @foreach ($products as $product)
                <div class="column is-half">
                    <div style="border-radius: 20px !important" class="card ">
                        <a href="{{ asset('product/' . $product->id) }}">
                            <div class="card-image">
                                <figure style="width: 100%" class="image pt-3 ">
                                    <img src="{{ asset($product->img) }}" alt="img">
                                </figure>
                            </div>
                        </a>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                </div>
                                <div class="">
                                    <p class="title is-4 text-black">{{strtoupper($product->name)  }}</p>
                                    <p class="subtitle is-6 text-green-2">{{strtoupper($product->description)  }}</p>
                                </div>
                            </div>

                            <div class="content">
                                <div class="columns is-mobile is-vcentered text-center">
                                    <div class="column is-6-mobile text-black">
                                        <h4 class="text-black " >$ {{ $product->cost }}</h4>
                                    </div>
                                    <div style="font-size: 5px" class="column is-6-mobile">
                                        <button  class="button" onclick="addToCart({{$product->id}})">
                                            <span class="icon is-medium">
                                                <i style="font-sze: 10px" class="icon is-medium fas fa-shopping-bag"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <script src="{{ asset('js/axios.js') }}"></script>
    @section('js')
    @show
</body>

</html>