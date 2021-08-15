Vue.component('v-cart-item', {
    props: [
        'img',
        'name',
        'cost',
        'quantity',
        'index'
    ],
    template: `
    <div  class="columns is-mobile is-vcentered">
    <div class="column is-3-mobile">
      <div class="box">
        
        <div class="child">
          <img class="mb-0" :src="img" alt="img">
        </div>
      </div>
    </div >
    <div class="column is-7-mobile pl-6">
        {{name}}
        <div>
        $ {{cost}}
        </div>
    </div>
    <div class="column is-2-mobile">
        <div class="columns is-mobile">
            <div class="column is-6-mobile">
                <button class="button is-small" @click="$emit('edit')">
                    {{quantity}}
                </button>
            </div>

            <div class="column is-6-mobile">
                <a @click="$emit('action')"  class="button is-small">
                    <span class="icon is-small">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                </a>   
             </div>
        </div>

    </div>
</div>
    `


})



var indexApp = new Vue({
    delimiters: ['${', '}'],
    el: '#app-cart',
    data: {
        products: [],
        modal: {
            quantity: 0,
            index: 0,
        }
        

    },
    mounted: function () {
        this.getItems()
        
        
    },
    computed: {
      totalProducts () {
          this.total = 0,
          this.products.forEach(element => {
              this.total = this.total + (element.quantity * element.cost);
              
          });

          return this.total;
      }  
    },
    methods: {
        getItems() {
            _that = this
            axios.get(`carrito/get-cart`)
                .then((response) => {
                    _that.products = response.data.items
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        deleteCartItem(index) {
            var _that=this

            axios.get(`/carrito/delete-item/${index}`)
                .then( (response) => {
                    _that.getItems();
                    alert('se a eliminado el elemento');
                })
                .catch(function (error) {
                    console.log(error);
                });
        
        },

        getCart() {
            var _that=this
            axios.get(`/carrito/obtener`)
                .then( (response) => {
                    _that.cart=response.data.items
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        editItemQuantity( id) {
            var modal = document.getElementById(id);
            modal.classList.remove('is-active');

            this.products[this.modal.index].quantity = this.modal.quantity;
        },

        viewCart(items) {
            var count = items.length;
            document.getElementById('cart-item').innerHTML = count
        },

        openModal(index, id) {
            this.modal.index= index
            this.modal.quantity= this.products[this.modal.index].quantity;
           
            var modal = document.getElementById(id);
            modal.classList.add('is-active');


        },

        closeModal(id) {
           
            var modal = document.getElementById(id);
            modal.classList.remove('is-active');

        },

        addItem() {
            this.modal.quantity++
        },

        removeItem() {
            this.modal.quantity--
        }
    }
})
