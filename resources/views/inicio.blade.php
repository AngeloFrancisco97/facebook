
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Starter Template · Bootstrap</title>


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
  <body style="background: #F0F2F5 ">
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
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
                      <a class="nav-link" href="#"><i class="fas fa-home icones icone-azul"></i><span class="sr-only">(current)</span></a>
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

<main role="main" style="background-color: #F0F2F5">
    <div class="menu-lateral-esqeurdo">
        <div><a href="{{ url('usuarios')}}"><i class="pt-2 fas fa-user"></i>{{ Auth::user()->name }}</a></div>
        <div class="d-flex pt-3"><i class="fas fa-bell"></i><div class="ml-2">COVID-19: Central de Informações</div></div>
        <div class="d-flex pt-3"><i class="fas fa-bell"></i><div class="ml-2">Amigos</div></div>
        <div class="d-flex pt-3"><i class="fas fa-bell"></i><div class="ml-2">Grupos</div></div>
        <div class="d-flex pt-3"><i class="fas fa-bell"></i><div class="ml-2">Marketplace</div></div>
        <div class="d-flex pt-3"><i class="fas fa-bell"></i><div class="ml-2">Videos</div></div>
        <div class="d-flex pt-3"><i class="fas fa-bell"></i><div class="ml-2">Eventos</div></div>
        <div class="d-flex pt-3"><i class="fas fa-bell"></i><div class="ml-2">Lembranças</div></div>
        <div class="d-flex pt-3"><i class="fas fa-bell"></i><div class="ml-2">Salvos</div></div>
        <div class="d-flex pt-3"><i class="fas fa-bell"></i><div class="ml-2">Ver mais</div></div>
        <hr>
        <h5>Seus Atalhos</h5>
        <div class="d-flex pt-3"><i class="fas fa-bell"></i><div class="ml-2">Coin Master</div></div>
        <div class="d-flex pt-3"><i class="fas fa-bell"></i><div class="ml-2">Outras coisas</div></div>
    </div>
    <div class="container container-central">
        <div class="d-flex">
            <div class="story">
                
            </div>
            <div class="story">
                
            </div>
            <div class="story">
                
            </div>
            <div class="story">
                
            </div>
            <div class="story">
                
            </div>
        </div>
        <div class="d-flex mt-4 justify-content-center" style="width: 100%;" >
            <div class="justify-content-center d-flex flex-column p-3 align-items-center" style="background-color: white; border-radius: 10px; width: 90%; height: 100%;">
                <div class="w-100 d-flex align-items-center">
                    <div class="circulo_icones mr-2"></div>
                    <form action="{{ url('cadastrar_publicacao') }}" method="post" class="w-100">
                        @csrf
                        <input type="hidden" name="idUsuario" value="{{ Auth::user()->id }}">
                        <input class=" form-control w-100" style="border-radius: 30px; background: #F0F2F5" type="text" name="mensagem" placeholder="O que você está pensando.">
                        <input type="submit" value="enviar">
                    </form> 
                </div> 
                <hr class="w-100">
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <div class=""><i class="fas fa-video mr-2" style="color: red"></i>Videos ao vivo</div> 
                    <div class=""><i class="fas fa-camera-retro mr-2 ml-3" style="color: green"></i>Foto/vídeo</div> 
                    <div class=""><i class="fas fa-grin-beam mx-2 ml-3" style="color: orange"></i>Semtimento/atividade</div> 
                </div> 
            </div>  
            
        </div>
        @foreach ($publicacoes as $publicacao)
        <div class="d-flex flex-column mt-4 justify-content-center" style="width: 100%;" >
                <div class="justify-content-center d-flex flex-column align-items-center" style="background-color: white; border-radius: 10px; width: 90%; height: 100%; align-self: center;">
                    <div class="justify-content-center d-flex flex-column p-3 align-items-center w-100" style="">
                        <div class="w-100 d-flex align-items-center justify-content-between">
                            <div class="w-100 d-flex align-items-center">
                                <div class="circulo_icones" style=""></div>
                                <div class="d-flex flex-column ml-2">
                                    <div class="">{{ $publicacao->name }}</div>
                                    <div class="" style="font-size: 12px">5 h ·<i class="fas fa-user ml-1" style=""></i></div>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-ellipsis-h"></i>
                            </div>
                        </div> 
                        <div class="w-100 d-flex justify-content-center align-items-center">
                            <p>{{ $publicacao->mensagem }}</p>
                        </div> 
                    </div>
                    <div class="w-100" style="height: 250px; background-color: gray; border-radius: ">

                    </div>
                    <div class="d-flex p-3 w-100 justify-content-between">
                        <div class=" d-flex align-items-center">
                            <i class="fab fa-gratipay" style="color: red; font-size: 20px"></i>
                            <i class="far fa-thumbs-up" style="color: blue; font-size: 20px"></i>
                            <p class="m-0 ml-2">10</p>
                        </div>
                        <div>
                            12 comentários
                        </div>
                    </div>
                    <div class="d-fex px-3 w-100">
                      <hr class="m-0"> 
                    </div>
                    <div class="d-flex w-100 m-2 justify-content-around align-items-center">
                        <div class="d-flex align-items-center">  
                            <i class="fab fa-gratipay mr-2 " style="color: red; font-size: 20px"></i>Amei
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="far fa-comment-alt mr-2" style="color: red; font-size: 20px"></i>Comentar
                        </div>
                    </div>
                    <div class="d-fex px-3 w-100">
                      <hr class="m-0"> 
                    </div>
                    <div class="w-100 d-flex align-items-center p-3">
                        <div class="circulo_icones mr-2"></div>
                        <form class="w-100">
                            <input class=" form-control w-100" style="border-radius: 30px; background: #F0F2F5" type="text" name="name" placeholder="O que você está pensando.">
                        </form> 
                    </div> 
            </div>
        </div>
        @endforeach
        
        <div class="d-flex flex-column mt-4 justify-content-center" style="width: 100%;" >
                <div class="justify-content-center d-flex flex-column align-items-center" style="background-color: white; border-radius: 10px; width: 90%; height: 100%; align-self: center;">
                    <div class="justify-content-center d-flex flex-column p-3 align-items-center" style="">
                        <div class="w-100 d-flex align-items-center justify-content-between">
                            <div class="w-100 d-flex align-items-center">
                                <div class="circulo_icones" style=""></div>
                                <div class="d-flex flex-column ml-2">
                                    <div class="">Angelo Franisco</div>
                                    <div class="" style="font-size: 12px">5 h ·<i class="fas fa-user ml-1" style=""></i></div>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-ellipsis-h"></i>
                            </div>
                        </div> 
                        <div class="w-100 d-flex justify-content-center align-items-center">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id condimentum leo. Quisque arcu ipsum, mollis porta urna vitae, congue vulputate justo. Vestibulum ultricies ex in dui dignissim, sed faucibus dolor efficitur. Vivamus ante erat, efficitur in nulla et, pulvinar auctor ante. Nunc tempus ac sem vel interdum. Aliquam euismod tincidunt nisl et condimentum. Pellentesque habitant morbi tristique.</p> 
                        </div> 
                    </div>
                    <div class="w-100" style="height: 250px; background-color: gray; border-radius: ">

                    </div>
                    <div class="d-flex p-3 w-100 justify-content-between">
                        <div class=" d-flex align-items-center">
                            <i class="fab fa-gratipay" style="color: red; font-size: 20px"></i>
                            <i class="far fa-thumbs-up" style="color: blue; font-size: 20px"></i>
                            <p class="m-0 ml-2">10</p>
                        </div>
                        <div>
                            12 comentários
                        </div>
                    </div>
                    <div class="d-fex px-3 w-100">
                      <hr class="m-0"> 
                    </div>
                    <div class="d-flex w-100 m-2 justify-content-around align-items-center">
                        <div class="d-flex align-items-center">  
                            <i class="fab fa-gratipay mr-2 " style="color: red; font-size: 20px"></i>Amei
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="far fa-comment-alt mr-2" style="color: red; font-size: 20px"></i>Comentar
                        </div>
                    </div>
                    <div class="d-fex px-3 w-100">
                      <hr class="m-0"> 
                    </div>
                    <div class="w-100 d-flex align-items-center p-3">
                        <div class="circulo_icones mr-2"></div>
                        <form class="w-100">
                            <input class=" form-control w-100" style="border-radius: 30px; background: #F0F2F5" type="text" name="name" placeholder="O que você está pensando.">
                        </form> 
                    </div> 
            </div>
            
        </div>
        
    </div>
    @endguest

</main><!-- /.container -->
	<script src="{{ asset('js/jquery.js')}}" type="text/javascript"></script>
        <script src="https://kit.fontawesome.com/b11c4b137e.js" crossorigin="anonymous"></script>
</body>
</html>
