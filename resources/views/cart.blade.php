<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script src="https://kit.fontawesome.com/40245cd335.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>carrito</title>
        <style>
        .box {
          position:relative;
          width: 100%;
          height: 100px;
          top: 10px;
          background-color: red;
          border-radius: 15px;
          padding:0px;
        }
        .child {
          position: absolute;
          width: 100%;
          height: 100px;
          top: -10px;
        }
        .buttons {
          border-radius: 50px;
          /*width: 15px;
          height: 15px;*/
          padding:4px;
        }
        </style>
    </head>
    <body style="background-color: #f5f5f5">
        <nav class="navbar is-danger" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
              </a>
          
              <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
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
    </body>
</html>
