@extends('home')
@section('titulo', 'actividades')
@section('conteudo')

<br>
      <div class="row container crud">

                  <div class="row titulo ">              
                  <h3 class="left">Todas as Actividades</h3>
                  <span class="right chip">Esta Página Contém {{$atividades->count()}} Subject</span>  
                  </div>


                  <div class="card z-depth-4 registros" >

                  <br>
             <div class="row container">
                               @foreach ($atividades as  $atividade)
                                     <div class="col s12 m3">
                                             <div class="card">
                                                   <div class="card-image">

                                                       <a class="white" href=" {{ route('site.atdetalhes', ['id' => $atividade->id])}}">
                                                       <i class="material-icons"><img src ="{{asset('img/doc.png')}}"></i></a>      
                                                     </div> 
                                                        
                                                   <div class="card-content">
                                                   <span class="card-title">{{ Str::limit($atividade->nome, 15) }}</span>
                                                   <p>{{ Str::limit($atividade->descricao, 20) }}</p>
                                                   </div>

                                             </div>
                                      </div>

                                      @endforeach

                                   
                                </div>     
                            

                               
                             </div>
                          
                        
       </div>

                           

      
@endsection