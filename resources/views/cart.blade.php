@extends('layout.main')

@section('title', 'carrito')
  
@section('content')
<div class="container is-fluid">
  <div class="columns is-mobile">
      <div class="column is-12-mobile is-3-desktop">
          <h1 class="title is-1">MI LISTA</h1>
      </div>
  </div>

  @foreach ($items as $product)
  <div class="columns is-mobile is-vcentered">
      <div class="column is-3-mobile">
        <div class="box">
          
          <div class="child">
            <img class="mb-0" src="{{ asset($product['img']) }}" alt="img">
          </div>
        </div>
      </div >
      <div class="column is-7-mobile pl-6">
          {{$product['name']}}
          <div>
          $ {{$product['cost']}}
          </div>
      </div>
      <div class="column is-2-mobile">
          <div class="columns is-mobile">
              
              <div class="raw">
                  01
              </div>
                 
          </div>
  
      </div>
  </div>
  @endforeach
  <hr style="border-top: 3px dashed black;">
  <div class="columns   is-mobile is-vcentered  is-size-2 pt-4">
      <div class="column is-8-mobile pl-5">
          TOTAL:
      </div>
      <div class="column has-text-centered is-3-mobile">    
          <div>
              $120.00
          </div>
      </div>
  </div>

  <div class="columns   is-mobile is-vcentered  is-size-2 py-4 ">
      <button class="button is-fullwidth is-large is-black" >
          COMPRAR
      </button>
  </div>


  
</div>
@endsection

