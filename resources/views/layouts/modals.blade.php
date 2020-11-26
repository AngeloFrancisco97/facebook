<!-- Modal Editar Usuario -->
<form action="{{ url('editar_perfil')}}" method="post" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{ Auth::user()->id }}">
<div class="modal fade" id="editarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center w-100" id="exampleModalLabel">Editar perfil</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group row text-left mb-4">
                <label class="col-sm-2 col-form-label" for="">Nome</label>
                <div class="col-sm-10 pr-3">
                    <input type="text" class="form-control" name="nome" value="{{ Auth::user()->name }}" id="formGroupExampleInput" placeholder="">
                </div>
            </div>
            <div class=" d-flex justify-content-between">
                <h5>Foto do perfil</h5>
                <span data-toggle="modal" data-target="#adicionarFotoPerfil" style="color: #188CF5">Adicionar</span>
            </div>
            <div class="top-0 mb-4 alinhar-circulo-perfil">
            <div class="circulo-perfil background-images" style="background-image: url('storage/{{auth::user()->fotoPerfil}}')">

            </div>

            </div>
              <div class="d-flex justify-content-between">
                  <h5>Foto da Capa</h5>
                  <span data-toggle="modal" data-target="#adicionarFotoCapa" style="color: #188CF5">Adicionar</span>
              </div>
          <div class="container container-perfil background-images" style="max-width: 600px !important; height: 230px; min-height: 1px; border-radius: 20px; background-image: url('storage/{{auth::user()->fotoCapa}}')">

            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Adicionar foto de perfil -->
<div class="modal fade" id="adicionarFotoPerfil" tabindex="-1" aria-labelledby="adicionarFotoPerfil" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
            <h4 class="modal-title text-center w-100" id="exampleModalLabel">Atualizar foto do perfil</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
                    <div class="d-flex justify-content-between text-left">
                    <div class="custom-file px-2">
                        <input type="file" name="fotoPerfil" class="custom-file-input" id="customFile" lang="pt-br">
                      <label class="custom-file-label" for="customFile">Carregar foto</label>
                    </div>
                    <!--div class="custom-file mx-4">
                        <input type="file" class="custom-file-input" id="customFile" lang="pt-br">
                        <label class="custom-file-label" for="customFile">Escolha a imagem</label>
                    </div-->
                    </div>
               
        </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Adicionar Foto da Capa -->
<div class="modal fade" id="adicionarFotoCapa" tabindex="-1" aria-labelledby="adicionarFotoCapa" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
            <h4 class="modal-title text-center w-100" id="exampleModalLabel">Atualizar foto da Capa</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
                    <div class="d-flex justify-content-between text-left">
                    <div class="custom-file px-2">
                        <input type="file" name="fotoCapa" class="custom-file-input" id="customFile" lang="pt-br">
                      <label class="custom-file-label" for="customFile">Carregar foto</label>
                    </div>
                    <!--div class="custom-file mx-4">
                        <input type="file" class="custom-file-input" id="customFile" lang="pt-br">
                        <label class="custom-file-label" for="customFile">Escolha a imagem</label>
                    </div-->
                    </div>
               
        </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
</form>