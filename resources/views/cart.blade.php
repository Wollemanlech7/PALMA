@extends('layout.main')

@section('title', 'carrito')
  
@section('content')
<div id="app-cart" class="container is-fluid">
  <div class="columns is-mobile">
      <div class="column is-12-mobile is-3-desktop">
          <h1 class="title is-1">MI LISTA</h1>
      </div>
  </div>

  <v-cart-item
    v-for="(product, index) in products"
    :key="product.id"
    :img="product.img"
    :name="product.name"
    :cost="product.cost"
    :quantity="product.quantity"
    @action="deleteCartItem(index)"
    @edit="openModal(index, 'modalQuantity')"
    >


  </v-cart-item>

  <hr style="border-top: 3px dashed black;">
  <div class="columns   is-mobile is-vcentered  is-size-2 pt-4">
      <div class="column is-8-mobile pl-5">
          TOTAL:
      </div>
      <div class="column has-text-centered is-3-mobile">    
          <div>
            ${totalProducts}
          </div>
      </div>
  </div>

  <div class="columns   is-mobile is-vcentered  is-size-2 py-4 ">
      <button class="button is-fullwidth is-large is-black" >
          COMPRAR
      </button>
  </div>

  <div id="modalQuantity" class="modal">
    <div class="modal-background"></div>
    <div style= "width:300px"  class="modal-content">
        <div sclass="modal-card "  >
            <header class="modal-card-head">
              <p class="modal-card-title">CANTIDAD</p>
              <button @click="closeModal('modalQuantity')" class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                
                    <div class="field has-addons has-addons-right">
                        <p class="control">
                            <button @click="removeItem()" class="button is-primary">
                                -
                            </button>
                        </p>
                        <p class="control">
                            <input v-model="modal.quantity" style="text-align:center; fnt-size:20px" class="input" type="number" placeholder="01">
                        </p>
                        <p class="control">
                            <button @click="addItem()" class="button is-primary">
                                +
                            </button>
                        </p>
                    </div>
            </section>
            <footer  class=" modal-card-foot is-center has-text-center ">
              <button style="margin:auto"  @click="editItemQuantity('modalQuantity')" class="button">GUARDAR</button>
            </footer>
          </div>
    </div>
  </div>

  
</div>
@endsection

@section('js')
    <script src="{{asset('js/vue-cart.js')}}"></script>
@endsection

