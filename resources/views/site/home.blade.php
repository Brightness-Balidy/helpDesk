@extends('site.layout')
@section('title','pagina inicial')
@section('conteudo')


<style>
    .mainRow{
        height: 700px;
        width: 75%;
        margin-left: 330px;
        
    }
    .rowConteudo{
        width:85%; 
    }
</style>


<div class="row container mainRow ">
    <div class="row rowConteudo">
        <div class="col s12 ">
      <div id="create" class="">
        <div class="modal-content bg-gradient-green">
          <h4><i class="material-icons">people</i>Nova Requisição</h4>
    
          <form action="/post" method="POST" class="col s12" >
            <div class="row mt-5">
    
              <div class="input-field col s6">
                @csrf
                <input  id="nome" name="nome" type="text" class="validate">
                <label for="nome">Titulo</label>
              </div>
              <div class="input-field col s6">
                <input id="sobrenome" name="sobrenome" type="text" class="validate">
                <label for="sobrenome">Descricao</label>
              </div>
              <div class="input-field col s6">
                <input id="sobrenome" name="sobrenome" type="text" class="validate">
                <label for="sobrenome">Categoria</label>
              </div>
            </div>
            <div class="row mt-3">
              <div class="input-field col s6">
                <input type="text" id="contacto" name="contacto" class="validate">
                <label for="contacto">Contacto</label>
              </div>
            </div>
                <div class="fixed-action-btn">
                    <button type="submit" class="btn-floating btn-large bg-gradient-green modal-trigger" >
                      <i class="large material-icons">add</i>
                    </a>   
                  </div>
          </form>
        </div>      
      </div>
    </div>
    </div>
@foreach ($requisicoes as $requisicao)
    <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><h5>{{$requisicao->titulo}}</h5></span>
              <p>{{$requisicao->descricao}}
              </p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
     
       <!-- Tap Target Structure -->
  <div class="tap-target" data-target="menu">
    <div class="tap-target-content">
      <h5>Title</h5>
      <p>A bunch of text</p>
    </div>
  </div>
 @include('site.clientes.create')

</div>

<script>
    $(document).ready(function(){
       $('.tap-target').tapTarget();
     });
   </script>
   
@endsection

