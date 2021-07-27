<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script src="https://kit.fontawesome.com/40245cd335.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style>
        body, html {
            height:100%;
            margin:0;
            display: flex;
            flex-direction: column;

        }

        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none !important; 
        margin: 0; 
        }

        input[type=number] { -moz-appearance:textfield; }


        .card-info {
            margin-top:230px; 
            border-radius:30px !important; 
            padding:10px 50px ; 
        }
        .box {

            position: relative;
            width: 100%;
            height: 90%;
            top: 100px;
            bottom: 0;
            
            
            border-radius: 50px;
            padding: 0px;
        }

        .child {
            position: absolute;
            width: 100%;
            height: 30%;
            top: -160px;
            padding: 50px
            
        }

        .buttons {
            border-radius: 50px;
            /*width: 15px;
            height: 15px;*/
            padding: 4px;
        }

    </style>
</head>

<body class="bg-white">
    <nav class="navbar bg-white" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
           {{-- <a class="navbar-item" href="https://bulma.io"> --}}
                {{-- <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28"> --}}
            {{-- </a> --}}

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Documentation
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        More
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            About
                        </a>
                        <a class="navbar-item">
                            Jobs
                        </a>
                        <a class="navbar-item">
                            Contact
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            Report an issue
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="columns is-mobile">
        <div class="box bg-green-2">
            <div class="child">
                <img class="mb-0" src="{{ asset($product->img) }}" alt="img">
            </div>
            <div style="display:flex; flex-wrap:wrap "  class="is-flex is-mobile bg-white card-info">
                <div class="column is-6-mobile">
                    <div  class="has-background-sccess">
                        <p class="title is-3 text-black">{{strtoupper($product->name)}}</p>
                        <p class="subtitle is-6 text-green-2">{{strtoupper($product->description)}}</p>
                    </div>
                </div>
                <div  class="column is-6-mobile is-size-1 has-text-centered ">
                    <h4>${{$product->cost}}</h4>
                </div>
                <div  class="column is-6-mobile">
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
            {{-- <div class="content">
                <div class="columns is-mobile is-vcentered ">
                    <div class="column is-6-mobile has-text-centered ">
                        
                    </div>
                    <div class="column is-6-mobile ">
                        <div class="column is-centered has-text-centered">
                            
                        </div>
                        <div class="column">
                            
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</body>

</html>
