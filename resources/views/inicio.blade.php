@extends('layouts.app')
    @section('content')
    @auth
    <div style="background-color: #F0F2F5">
    <div class="menu-lateral-esqeurdo" >
        <div><a href="{{ url('perfil')}}"><i class="pt-2 fas fa-user"></i>{{ Auth::user()->name }}</a></div>
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
        <form action="{{ url('cadastrar_publicacao') }}" method="post" enctype="multipart/form-data" class="w-100">
            <div class="d-flex mt-4 justify-content-center" style="width: 100%;" >
                <div class="justify-content-center d-flex flex-column p-3 align-items-center" style="background-color: white; border-radius: 10px; width: 90%; height: 100%;">
                    <div class="w-100 d-flex align-items-center">
                        <div class="circulo_icones mr-2 background-images" style="background-image: url('storage/{{ Auth::user()->fotoPerfil }}')"></div>
                            @csrf
                            <input type="hidden" name="idUsuario" value="{{ Auth::user()->id }}">
                            <input class=" form-control w-100" style="border-radius: 30px; background: #F0F2F5" type="text" name="mensagem" placeholder="O que você está pensando.">
                    </div> 
                    <hr class="w-100">
                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <div class=""><i class="fas fa-video mr-2" style="color: red"></i>Videos ao vivo</div> 
                        <input id="file" type="file" name="foto" class="d-none">
                        <label class="m-0" for="file" ><i class="fas fa-camera-retro mr-2 ml-3" style="color: green"></i>Foto/vídeo</label> 
                        <div class=""><i class="fas fa-grin-beam mx-2 ml-3" style="color: orange"></i>Semtimento/atividade</div> 
                    </div> 
                </div>  

            </div>
        </form>
        @foreach ($publicacoes as $publicacao)
        <div class="d-flex flex-column mt-4 justify-content-center" style="width: 100%;" >
                <div class="justify-content-center d-flex flex-column align-items-center" style="background-color: white; border-radius: 10px; width: 90%; height: 100%; align-self: center;">
                    <div class="justify-content-center d-flex flex-column p-3 align-items-center w-100" style="">
                        <div class="w-100 d-flex align-items-center justify-content-between">
                            <div class="w-100 d-flex align-items-center">
                                <div class="circulo_icones background-images" style="background-image: url('storage/{{ $publicacao->fotoPerfil }}')"></div>
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
                    @if ($publicacao->foto!="")
                    <div class="w-100" style="height: 100%; border-radius: ">
                        <img class="w-100" src="{{ url("storage/{$publicacao->foto}")}}" alt="alt"/>
                    </div>
                    @endif
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
  
    </div>
    </div>
    @endauth
    @endsection
