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

        <div class="columns is-mobile">
            <div style="position: relative; margin:auto; text-align:center" class="column is-12-mobile">
                <div style="position: absolute; top:10;z-index:1;" class="">
                    <figure style="background-color:bue;" class="">
                    <img style="width:350px" src="{{asset('img/img-f.png') }}" alt="img">
                    </figure>
                </div>
                <div style="top:250px; border-radius:50px; bottom:0; right:0; let:0; position: fixed;" class="crd has-background-warning ">
                    <div style="" class="card-content">
                      <div style="margin-top:220px; border-radius:30px; padding:50px" class="has-background-white">
                          <p class="title is-4">SABRITAS</p>
                          <p class="subtitle is-6">SABOR LIMÓN</p>
                      </div>
                      
                      <div class="content">
                        <div class="columns is-mobile is-vcentered text-center">
                            <div class="column is-6-mobile">
                                <h3>$5.99</h3>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

