@extends('home')
@section('titulo', 'detalhes')
@section('conteudo')
<div class="row container">
         

    <div class="modal-content">        
      <h4 id="nomeCantor">{{ $atividades->nome}}</h4>
      <h5 id="nomeCantor">Tipo da Atividade: {{ $atividades->tipo}}</h4>


      <p>Informações adicionais:</p>
          <ul class="collection">
                     
                      <li class="collection-item avatar">
                         <img src ="{{asset('img/doc.png')}}" class="circle">
                            <span class="title">
                              Link do Repositorio: {{ $atividades->repo}}<br><br>
                              Data de Lançamento:  {{ $atividades->data_de_lancamento}}<br><br>
                              Descricao: {{ $atividades->descricao}}<br><br>
                            
                              @can('acess-dashboard')   
                              Criado em: {{ $atividades->created_at}} <br><br>
                              @endcan
                              <a href=" {{ url("storage/{$atividades->pdf}")}}" >
                              <img src ="{{asset('img/download.png')}}"> baixar subject:
                            </a><br><br>
                             
                             <img src ="{{asset('img/cancel.png')}}"> Por Favor Não Baixe Este Subject se este não te foi atribuida  pela  staff

                            </span>

                        
                      </li>
                   

          </ul>
      
    </div>





                
</div>
@endsection