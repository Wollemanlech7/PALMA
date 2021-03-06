Vue.component('v-categories', {
    props: [
        'id',
        'img',
        'category'

    ],
    template: `
        <div class="column is-7-mobile mb-0 ">
            <a :href="id">
                <div class="card ">
                    <div class="card-content ">
                        <div class="columns is-mobile is-vcentered">
                            <div class="column is-4-mobile mb-0">
                                <figure class="img is-48x48 mb-0">
                                    <img class="mb-0" :src="img" alt="img">
                                </figure>
                            </div>
                            <div class="column is-8-mobile ">
                                <p class="title is-4 text-">{{ category }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    `


})

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

var indexApp = new Vue({
    delimiters: ['${', '}'],
    el: '#app-index',
    data: {
        categories: [],
        products: [],
        cart:[],

    },
    mounted: function () {
        this.getCategories()
        
    },
    methods: {
        getCategories() {
            _that = this
            axios.get(`index/get-categories`)
                .then((response) => {
                    _that.categories = response.data.categories
                    _that.products = response.data.products
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        addToCart(articulo) {
            var _that=this

            axios.get(`/carrito/agregar/${articulo}`)
                .then( (response) => {
                    _that.viewCart(response.data.items)
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

        viewCart(items) {
            var count = items.length;
            document.getElementById('cart-item').innerHTML = count
        },
        
    }
})
