Vue.component('v-categories', {
    props: [
        'img',
        'category'

    ],
    template: `
        <div class="column is-7-mobile mb-0 ">
            <div class="card ">
                <div class="card-content ">
                    <div class="columns is-mobile is-vcentered">
                        <div class="column is-4-mobile mb-0">
                            <figure class="img is-48x48 mb-0">
                                <img class="mb-0" src="{{ asset(img) }}" alt="img">
                            </figure>
                        </div>
                        <div class="column is-8-mobile ">
                            <p class="title is-4 text-">{{ category }}</p>
                        </div>
                    </div>
                </div>
            </div>
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
                        <p class="title is-4 text-black">{{strtoupper(name)  }}</p>
                        <p class="subtitle is-6 text-green-2">{{strtoupper(description)  }}</p>
                    </div>
                </div>

                <div class="content">
                    <div class="columns is-mobile is-vcentered text-center">
                        <div class="column is-6-mobile text-black">
                            <h4 class="text-black " >$ {{ cost }}</h4>
                        </div>
                        <div style="font-size: 5px" class="column is-6-mobile">
                            <button  class="button" onclick="addToCart({{id}})">
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
        categories: []
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
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
})
