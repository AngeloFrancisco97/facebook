<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Starter Template · Bootstrap</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css')}}">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body style="background: white">
        @guest
            <script>window.location = "login";</script>
        @else
        <nav class="mt-0 pt-1 pb-0 navbar navbar-expand-md navbar-light fixed-top" style="background: white;">
            <a class="navbar-brand" href="#"><i class="fab fa-facebook facebook"></i></a>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control pesquisa" type="text" placeholder="Search" aria-label="Search">
            </form>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <div class="icone-ativo">
                      <a class="nav-link" href="{{ url('/')}}"><i class="fas fa-home icones icone-azul"></i><span class="sr-only">(current)</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="">
                      <a class="nav-link" href="#"><i class="fas fa-tv icones "></i><span class="sr-only">(current)</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="">
                      <a class="nav-link" href="#"><i class="fas fa-store icones "></i><span class="sr-only">(current)</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="">
                      <a class="nav-link" href="#"><i class="fas fa-users icones"></i><span class="sr-only">(current)</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="">
                      <a class="nav-link" href="#"><i class="fas fa-gamepad icones"></i><span class="sr-only">(current)</span></a>
                    </div>
                </li>
              </ul>
              <div class="form-inline my-2 my-lg-0">
                  <div class="mr-2">{{ Auth::user()->name }}
                      <div class="" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </div>
                  <div class="mr-2 circulo_icones"><i class="fas fa-plus"></i></div>
                  <div class="mr-2 circulo_icones"><i class="fab fa-facebook-messenger"></i></div>
                  <div class="mr-2 circulo_icones"><i class="fas fa-bell"></i></div>
                  <div class="mr-2 circulo_icones"><i class="fas fa-caret-down" style="font-size: 22px"></i></div>
              </div>
            </div>
        </nav>
        
        <main role="main" style="">
            @yield('content')
           
        </main>
          @endguest 
        <script src="https://kit.fontawesome.com/b11c4b137e.js" ></script>
        <script src="{{ asset('js/scripts.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        
</body>
</html>
