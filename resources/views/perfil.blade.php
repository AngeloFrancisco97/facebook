@extends('layouts.app')
    @section('content')
    @auth
    <div class="container container-perfil background-images" style="background-image: url('storage/{{auth::user()->fotoCapa}}')" >
        <div class="alinhar-circulo-perfil">
            <div class="circulo-perfil background-images" style="background-image: url('storage/{{auth::user()->fotoPerfil}}')">
            </div>
            
        </div>
        <div class="botao-capa">
            <form action="action">
                <input type="button" class="btn btn-secondary" value="Adicionar foto da capa">
            </form>
        </div>
    </div>
    <div class="mt-4 container container-perfil-2 text-center">
        <h2>{{auth::user()->name}}</h2>
        <a href=""><h5>Adcionar biografia</h5></a>
        <hr>
        <div>
            
            <div class="d-flex justify-content-between">
                <ul class="navbar-nav flex-row ">
                  <li class="nav-item active">
                      <div class="icone-ativo">
                          <a class="nav-link px-2" href="#" style="font-size: 20px">Publicações</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <div class="">
                        <a class="nav-link px-2" href="#" style="font-size: 20px; color: black">Sobre</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <div class="">
                        <a class="nav-link px-2" href="#" style="font-size: 20px; color: black">Amigos</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <div class="">
                        <a class="nav-link px-2 text-decoration-none" href="#" style="font-size: 20px; color: black">Fotos</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <div class="">
                        <a class="nav-link px-2" href="#" style="font-size: 20px; color: black">Mais</a>
                      </div>
                  </li>
                </ul>  
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" id="botaoEditar" data-toggle="modal" data-target="#editarUsuario">
                      Editar perfil
                    </button>
                    @include('layouts.modals')
                </div>
            </div>
            
        </div>
            
    </div>
    <div class="pt-2 pb-3" style="background-color: #F0F2F5">
        <div class="container-perfil-2 py-3  container " style="background-color: white; border-radius: 10px">
            <h5 class="mb-4">Pessoas que você talvez conheça</h5>
            <div class="d-flex">
                    @php
                        $idAnterior = 0;
                    @endphp
                    @foreach ($usuarios as $usuario)
                            @if ($usuario->id != $idAnterior)
                            @if ($usuario->id != $id and $usuario->id != $usuario->idDeQuem)
                                <div class="story" style="border: 1px solid #F0F2F5; width: 200px; height: 320px">
                                    <div class="w-100 background-images" style=" background-color: #F0F2F5; height: 190px; border-radius: 20px; background-image: url('storage/{{$usuario->fotoPerfil}}')">

                                    </div>
                                    <div class="mx-3 mt-3">
                                        <h5 class="mb-0" >{{ $usuario->name }}</h5> 
                                        <span>Amigos em comuns </span>
                                        @if ($usuario->idDeQuem == auth::user()->id)
                                        {{auth::user()->id}} {{$usuario->idDeQuem}}/ {{$usuario->id}} 1
                                            <p class="pt-2" style="font-size: 18px; color: green;">solicitação enviada</p>
                                        @else
                                        {{auth::user()->id}} {{$usuario->idDeQuem}}/ {{$usuario->id}} 1
                                                <form action="{{ route('adicionar_amigo') }}" method="post">
                                                    
                                                    @csrf
                                                    <input type="hidden" value="{{auth::user()->id}}" name="idDeQuem">
                                                    <input type="hidden" value="{{$usuario->id}}" name="idParaQuem">
                                                    <input type="submit" class="mt-2 w-100 btn btn-secondary" value="Adicionar">
                                                </form>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endif
                        @php
                            $idAnterior = $usuario->id;
                        @endphp
                    @endforeach
            </div>
        </div>
    </div>
        @endauth
    @endsection
  

