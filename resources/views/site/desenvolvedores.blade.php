@extends('home')
@section('titulo', 'desenvolvedores')
@section('conteudo')

<br>
<div class="row container crud">

<div class="row titulo ">              
<h3 class="left">Todos os Desenvolvedores</h3>
<span class="right chip">Esta Página Contém {{$desenvolvedores->count()}} desenvolvedores</span>  
</div>


<div class="card z-depth-4 registros" >

<br>
             <div class="row container">
                               @foreach ($desenvolvedores as  $desenvolvedore)
                                     <div class="col s12 m3">
                                             <div class="card">
                                                   <div class="card-image">
                                                      <a class="white" href=" {{ route('site.detalhesd', ['id' => $desenvolvedore->id])}}">
                                                    <img src=" {{ url("storage/{$desenvolvedore->imagem}")}}" class="responsive-img">
                                                      </a> 
                                                     </div> 
                                                        
                                                   <div class="card-content">
                                                   <span class="card-title">{{ $desenvolvedore->nome }}</span>
                                                   <p>{{ Str::limit($desenvolvedore->descricao, 20) }}</p>
                                                   </div>

                                             </div>
                                      </div>

                                      @endforeach

                                   
                                </div>     
                            

                               
                             </div>
                        
</div>

                           


</div>
</div>

@endsection