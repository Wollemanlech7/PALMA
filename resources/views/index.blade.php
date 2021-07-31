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
            <v-product
                v-for="product in products"
                :key="product.id"
                :id="product.id"
                :img="product.img"
                :name="product.name"
                :description="product.description"
                :cost="product.cost"
            ></v-product>
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