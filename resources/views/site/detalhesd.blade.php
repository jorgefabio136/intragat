@extends('home')
@section('titulo', 'detalhes dos Desenvolvedores')
@section('conteudo')
<div class="row container">
         

    <div class="modal-content">        
      <h4 id="nomeCantor">{{ $desenvolvedores->nome}}</h4>
      <h5 id="nomeCantor">{{ $desenvolvedores->tipo}}</h4>


      <p>Informações adicionais:</p>
          <ul class="collection">
                     
                      <li class="collection-item avatar">
                         <img src =" {{ url("storage/{$desenvolvedores->imagem}")}}" class="circle">
                            <span class="title">
                              Descrição: {{ $desenvolvedores->descricao}} <br><br>
                              Data de Lançamento:  {{ $desenvolvedores->data_de_lancamento}}<br><br>
                              Especialidade: {{ $desenvolvedores->especialidade}} <br><br>
                            
                              @can('acess-dashboard')   
                              Criado em: {{ $desenvolvedores->created_at}} <br><br>
                              @endcan
    

                        
                      </li>
                   

          </ul>
      
    </div>





                
</div>
@endsection