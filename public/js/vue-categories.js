

Vue.component('v-product', {
    props: [
        'id',
        'img', 
        'name',
        'description',
        'cost',
    ],
    template: `
    <div class="column is-half">
        <div style="border-radius: 20px !important" class="card ">
            <a :href="'product/' + id ">
                <div class="card-image">
                    <figure style="width: 100%" class="image pt-3 ">
                        <img :src="img" alt="img">
                    </figure>
                </div>
            </a>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                    </div>
                    <div class="">
                        <p class="title is-4 text-black">{{ name.toUpperCase() }}</p>
                        <p class="subtitle is-6 text-green-2">{{ description.toUpperCase() }}</p>
                    </div>
                </div>

                <div class="content">
                    <div class="columns is-mobile is-vcentered text-center">
                        <div class="column is-6-mobile text-black">
                            <h4 class="text-black " >$ {{ cost }}</h4>
                        </div>
                        <div style="font-size: 5px" class="column is-6-mobile">
                            <button  class="button" @click="$emit('action')" >
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
    `


})

var categoriesApp = new Vue({
    delimiters: ['${', '}'],
    el: '#app-category',
    data: {
        categories: [],
        products: [],
        cart:[],

    },
    mounted: function () {
        this.getItemsCategory()
        
    },
    methods: {
        getItemsCategory() {
            _that = this
            var id= document.getElementById('category').value
            axios.get('/categories/get-items', {params:{id:id}})
                .then((response) => {
                    _that.products = response.data.products
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        // addToCart(articulo) {
        //     var _that=this

        //     axios.get(`/carrito/agregar/${articulo}`)
        //         .then( (response) => {
        //             _that.viewCart(response.data.items)
        //         })
        //         .catch(function (error) {
        //             console.log(error);
        //         });
        
        // },

        // getCart() {
        //     var _that=this
        //     axios.get(`/carrito/obtener`)
        //         .then( (response) => {
        //             _that.cart=response.data.items
        //         })
        //         .catch(function (error) {
        //             console.log(error);
        //         });
        // },

        // viewCart(items) {
        //     var count = items.length;
        //     document.getElementById('cart-item').innerHTML = count
        // },
        
    }
})
