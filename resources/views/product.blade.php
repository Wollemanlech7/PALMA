@extends('layout.main')

@section('title', 'Producto')

@section('content')
    <div class="columns is-mobile">
        <div class="box-product bg-green-2">
            <div class="child-product">
                <img class="mb-0" src="{{ asset($product->img) }}" alt="img">
            </div>
            <div style="display:flex; flex-wrap:wrap " class="is-flex is-mobile bg-white card-info">
                <div class="column is-6-mobile">
                    <div class="has-background-sccess">
                        <p class="title is-3 text-black">{{ strtoupper($product->name) }}</p>
                        <p class="subtitle is-6 text-green-2">{{ strtoupper($product->description) }}</p>
                    </div>
                </div>
                <div class="column is-6-mobile is-size-1 has-text-centered ">
                    <h4>${{ $product->cost }}</h4>
                </div>
                <div class="column is-6-mobile">
                    <p class="subtitle is-6 text-green-2 text-black">ESCOGE LA CANTIDAD</p>
                    <div class="field has-addons has-addons-right">
                        <p class="control">
                            <a class="button is-primary">
                                -
                            </a>
                        </p>
                        <p class="control">
                            <input style="text-align:center; fnt-size:20px" class="input" type="number" placeholder="01">
                        </p>
                        <p class="control">
                            <a class="button is-primary">
                                +
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
