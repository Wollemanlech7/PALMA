@extends('layout.main')

@section('title', 'carrito')
  
@section('content')

<div class="container is-fluid" id="app-category">
    <input type="hidden" id="category" value="{{$id}}"/> 
    <div style="display:flex; flex-wrap:wrap " class="columns is-mobile ">
        {{-- <v-product
            v-for="product in products"
            :key="product.id"
            :id="product.id"
            :img="product.img"
            :name="product.name"
            :description="product.description"
            :cost="product.cost"
        ></v-product> --}}
    </div>
</div>


@endsection

@section('js')
    <script src="{{asset('js/vue-categories.js')}}"></script>
@endsection
