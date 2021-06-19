<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script src="https://kit.fontawesome.com/40245cd335.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
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
                    <h1 class="title is-1">Escoge tus snacks favoritos</h1>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-9-mobile">
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-large  is-white" type="text" placeholder="Búsqueda...">
                        <span class="icon is-medium is-left">
                          <i class="fas fa-search"></i>
                        </span>
                    </div>   
                </div>
                <div class="column is-3-mobile">
                    <button class="button is-large">
                        <span class="icon is-small">
                            <i class="fas fa-heading"></i>
                        </span>
                    </button>       
                </div>
            </div>
            <div class="column is-7-mobile mb-0">
                <div class="card ">
                    <div class="card-content">
                        <div class="columns is-mobile is-vcentered">
                            <div class="column is-4-mobile mb-0">
                                <figure class="img is-48x48 mb-0">
                                    <img class="mb-0" src="{{ asset('img/sabritas-limon.jpg') }}" alt="img">
                                </figure>
                            </div>
                            <div class="column is-8-mobile">
                                <p class="title is-4">SABRITAS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column is-7-mobile">
                    <div class="card">
                        <a href="{{ asset('product/1') }}">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                  <img src="{{asset('img/img-f.png') }}" alt="img">
                                </figure>
                              </div>
                        </a>
                        <div class="card-content">
                          <div class="media">
                            <div class="media-left">
                            </div>
                            <div class="">
                              <p class="title is-4">SABRITAS</p>
                              <p class="subtitle is-6">SABOR LIMÓN</p>
                            </div>
                          </div>
                          
                          <div class="content">
                            <div class="columns is-mobile is-vcentered text-center">
                                <div class="column is-6-mobile">
                                    <h3>$5.99</h3>
                                </div>
                                <div class="column is-6-mobile">
                                    <button class="button is-large">
                                        <span class="icon is-small">
                                            <i class="fas fa-shopping-bag"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                </div>
            </div>
        </div> 

    </body>
</html>
