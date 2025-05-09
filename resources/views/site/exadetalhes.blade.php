@extends('home')
@section('titulo', 'examdetalhes')
@section('conteudo')
<div class="row container">
         

    <div class="modal-content">        
      <h4 id="nomeCantor">{{ $exames->nome}}</h4>
      <h5 id="nomeCantor">Tipo do Exame: {{ $exames->tipo}}</h4>


      <p>Informações adicionais:</p>
          <ul class="collection">
                     
                      <li class="collection-item avatar">
                         <img src ="{{asset('img/exam.png')}}" class="circle">
                            <span class="title">
                              Link do Repositorio: {{ $exames->repo}}<br><br>
                              Data de Lançamento:  {{ $exames->data_de_lancamento}}<br><br>
                              Descricao: {{ $exames->descricao}}<br><br>
                            
                              @can('acess-dashboard')   
                              Criado em: {{ $exames->created_at}} <br><br>
                              @endcan
                              <a href=" {{ url("storage/{$exames->pdf}")}}" >
                              <img src ="{{asset('img/download.png')}}"> baixar subject:
                            </a><br><br>
                             
                             <img src ="{{asset('img/cancel.png')}}"> Por Favor Não Baixe Este Subject se este não te foi atribuida  pela  staff

                            </span>

                        
                      </li>
                   

          </ul>
      
    </div>


                
</div>
@endsection