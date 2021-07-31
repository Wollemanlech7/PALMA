@extends('layout.main')

@section('title', 'Inicio')

@section('content')
    <div id="app-index" class="container is-fluid">
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
            <v-categories 
                v-for="category in categories"
                :key="category.id"
                img="img/sabritas-limon.jpg"
                :category="category.category"
                
            ></v-categories>
        

        </div>


        <div style="display:flex; flex-wrap:wrap " class="columns is-mobile ">
            {{-- @foreach ($products as $product)
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
            @endforeach --}}
        </div>
    </div>
@endsection

@section('js')
<script src="{{asset('js/vue-index.js')}}"></script>
<script>
    function addToCart(articulo) {
         // Make a request for a user with a given ID
     axios.get(`/carrito/agregar/${articulo}`)
     .then( (response) => {
         viewCart(response.data.items)
     })
     .catch(function (error) {
         // handle error
         console.log(error);
     });
    

     }

     function viewCart(items) {
         var count = items.length;
         document.getElementById('cart-item').innerHTML = count
     }
</script>



@endsection